<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Mailer\Email;
use Cake\Filesystem\Folder;
$tcpdf = require_once ROOT . '/vendor/tecnickcom/tcpdf/tcpdf.php';

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployerController extends AppController
{


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function postjob()
    {

      $this->loadModel('Modules');
      $module = $this->Modules->find('all');
      $this->set('module', $module);

      $this->loadModel('Countries');
      $country = $this->Countries->find('all');
      $this->set('country', $country);

      $this->loadModel('jobOffer');
      $offer = $this->jobOffer->newEntity();

    if ($this->request->is('post')) {
      $offer = $this->jobOffer->patchEntity($offer, $this->request->getData());
      date_default_timezone_set('Europe/Warsaw');
      $offer->post_date = date("Y-m-d H:i:s",time());
      $offer->change_date = date("Y-m-d H:i:s",time());
      $order   = array("\r\n", "\n", "\r");
      $replace = '<br />';
      $offer->description = str_replace($order, $replace, $offer->description);


      $location_data_name = strtolower(str_replace('Ś','s',(str_replace('ś','s',(str_replace('Ą','a',(str_replace('Ó','o',(str_replace('Ć','c',(str_replace('Ę','e',(str_replace('Ł','l',(str_replace('Ź','z',(str_replace('Ż','z',(str_replace('Ń','n',(str_replace('-','',str_replace(';','',str_replace(',','',str_replace('.', '',str_replace(' ','',str_replace('ł','l',
      str_replace('ę','e',str_replace('ą','a',str_replace('ź','z',str_replace('ż','z',str_replace('ó','o',str_replace('ń','n', $offer->city)))))))))))))))))))))))))))))))));

      $offer->location_data_name = $location_data_name;
        if ($this->jobOffer->save($offer)) {
          $transaction_id  = str_replace('-','',Text::uuid());

          $invo_url = $this->transaction($transaction_id, $offer->apply_email, $this->request->getData()['amount'], $this->request->getData()['service'], $offer->company_name, $this->request->getData()['company_tax'],
          $this->request->getData()['company_street'], $this->request->getData()['company_city'], $this->request->getData()['postal_code'], $this->request->getData()['company_country'], 'Paid');

          $email = new Email('default');
            if($email->setTo($offer->apply_email)
            ->setSubject("New job offer for " . strtoupper($this->request->getData()['job_title']) . " posted!")
            ->setEmailFormat('html')
            ->setTemplate('default')
            ->setLayout('jobpost')
            ->setViewVars(['offer_id' => $this->jobOffer->find('all',['fields'=>'id'])->last()['id'],'job_title' => $this->request->getData()['job_title']])
            ->setAttachments(array($invo_url))
            ->send())

          $this->Flash->success(__('Job offer has been saved. You will receive confirmation email.'));
        }
    }
    }

//// loginAction

public function login()
    {
      $uid = $this->Auth->user()['id'];
      if($uid) {
      return $this->redirect(['action' => 'index']);
      }

        if ($this->request->is('post')) {
          var_dump($user);
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if( $user['role'] === 'ADMIN') {
                   return $this->redirect($this->Auth->redirectUrl('/admin'));
                } else {
                   return $this->redirect(['controller' => 'users', 'action' => 'index']);
                }
            }
            $this->Flash->error(__('Invalid credentials. Please try again.'));
            return $this->redirect($this->Auth->redirectUrl('/'));
        }
    }
/// end of login action

////logout action
    public function logout(){
        $this->Auth->logout();
        $this->redirect('/');
    }
///end of logout


//invoice generator action

private function invoiceGen($invo_id, $email, $amount, 
  $service, $company_name, $company_tax, 
  $company_street, $company_city, $company_postal, $company_country, $status){
        
$pdf = new \tcpdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator("What's SAP");
$pdf->SetAuthor("What's SAP");
$pdf->SetTitle("What's SAP");
$pdf->SetSubject("What's SAP");
$pdf->SetKeywords("What's SAP");

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// ---------------------------------------------------------

// set font
$pdf->SetFont('customlight', 'BI', 20);

// add a page
$pdf->AddPage();

$test = 'test';
$html = '<img src="' . ROOT . '/webroot/img/logo.png" />';

$pdf->writeHTML($html, true, false, true, false, '');

$html = 
'
<hr>
<br>
<br>
<table>
<tr>
<td width="150">
<p align="left" style="font-size:10px;">SELLER:<br>
AMITY CONSULTING<br>
WHAT\'S SAP<br>
SIERADZKA 32/32<br>
60-163, POZNAŃ<br>
POLAND<br>
TAX NUM: 99-999-99-99</p>
</td>
<td width="360">
<p align="right" style="font-size:10px;">BUYER:<br>
' . strtoupper($company_name) . '<br>
' . strtoupper($company_street) . '<br>
' . strtoupper($company_postal) . '<br>
' . strtoupper($company_city) . '<br>
' . strtoupper($company_country) . '<br>
TAX NUM: ' . $company_tax . '</p>
</td>
</tr>
</table>
<br>
<p align="center">INVOICE ' . $invo_id . '</p>
<hr>
<br>
<table>
<tr>
<td width="300" style="font-size:12px;">
<p align="left">
SERVICE
</p>
</td>
<td width="70" style="font-size:12px;">
<p align="right">
NET
</p>
</td>
<td width="70" style="font-size:12px;">
<p align="right">
TAX
</p>
</td>
<td width="70" style="font-size:12px;">
<p align="right">
GROSS
</p>
</td>
</tr>
</table>
<hr>
<table>
<tr><td></td></tr>
<tr>
<td width="300" style="font-size:10px;">
<p align="left">
#1. ' . $service . '
</p>
</td>
<td width="70" style="font-size:10px;">
<p align="right">
' . $amount . ' $
</p>
</td>
<td width="70" style="font-size:10px;">
<p align="right">
23%
</p>
</td>
<td width="70" style="font-size:10px;">
<p align="right">
' . round($amount * 1.23, 2 , PHP_ROUND_HALF_EVEN) . ' $
</p>
</td>
</tr>
</table>
<br>
<table>
<tr><td></td></tr>
<tr>
<td width="510" style="font-size:13px;">
<p align="right">
TOTAL GROSS: ' . round($amount * 1.23, 2 ,PHP_ROUND_HALF_EVEN) . ' $
</p>
</td>
</tr>
</table>
<br>
<br>
<br>
<table>
<tr><td></td></tr>
<tr>
<td width="510">
<p align="left" style="font-size:13px;">
PAYMENT DETAILS
</p>
<p align="left" style="font-size:10px;">
Status: Paid<br>
Payment method: Bank transfer<br>
Payment date: 31.12.9999<br>
Account number: 53 3345 2349 9898 23
</p>
</td>
</tr>
</table>
';

$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------

//Close and output PDF document
if (!file_exists(ROOT . '/Invoices')) {
  $dir = new Folder(ROOT . '/Invoices', true);
}

$pdf->Output(ROOT . '/Invoices/' . $invo_id . '.pdf', 'F');

//============================================================+
// END OF FILE
//============================================================+

return ROOT . '/Invoices/' . $invo_id . '.pdf';

}

//end of invoice generator




// transaction save

private function transaction($transaction_id, $email, $amount, 
  $service, $company_name, $company_tax, 
  $company_street, $company_city, $company_postal, $company_country, $status){

  $this->loadModel('Transactions');
  $transaction = $this->Transactions->newEntity();

  $transaction->transaction_id = strtolower($transaction_id);
  $transaction->email = strtolower($email);
  $transaction->status = strtolower($status);

  $invo_id = ($this->Transactions->find('all',['fields'=>'id'])->last()['id'])+1;

  $invo_url = $this->invoiceGen($invo_id, $email, $amount, 
  $service, $company_name, $company_tax, 
  $company_street, $company_city, $company_postal, $company_country, $status);

  $transaction->invoice_url = $invo_url;

  $this->Transactions->save($transaction);

  return $transaction->invoice_url;

}

// transaction save

//end of controller
}
