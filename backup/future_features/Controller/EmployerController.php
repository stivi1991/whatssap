<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Utility\Text;
use Cake\Mailer\Email;
use Cake\Filesystem\Folder;
use Cake\Event\Event;
use Cake\I18n\Time;
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

  
   public function beforeFilter(Event $event) {
          parent::beforeFilter($event);
     
     $this->set('User', $this->Auth->user());
   }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function postjob()
    {

      $this->loadModel('Modules');
      $modules = $this->Modules->find('all', ['order' => 'module_desc ASC']);
      $this->set('modules', $modules);

      $this->loadModel('Countries');
      $countries = $this->Countries->find('all', ['order' => 'country_desc ASC']);
      $this->set('countries', $countries);
      
      $this->loadModel('Func');
      $func = $this->Func->find('all', ['order' => 'func_desc ASC']);
      $this->set('func', $func);
      
      $this->loadModel('ExpLevels');
      $exp_levels = $this->ExpLevels->find('all');
      $this->set('exp_levels', $exp_levels);
      
      $this->loadModel('Occupancies');
      $occupancies = $this->Occupancies->find('all');
      $this->set('occupancies', $occupancies);
      
      $this->loadModel('SalaryCurrs');
      $salary_currs = $this->SalaryCurrs->find('all', ['order' => 'curr_desc ASC']);
      $this->set('salary_currs', $salary_currs);
            
      $this->loadModel('SalaryPers');
      $salary_pers = $this->SalaryPers->find('all');
      $this->set('salary_pers', $salary_pers);
            
      $this->loadModel('SalaryKinds');
      $salary_kinds = $this->SalaryKinds->find('all');
      $this->set('salary_kinds', $salary_kinds);
      
      $this->loadModel('JobTypes');
      $job_types = $this->JobTypes->find('all', ['order' => 'type_desc ASC']);
      $this->set('job_types', $job_types);

      $this->loadModel('jobOffer');
      $offer = $this->jobOffer->newEntity();

    if ($this->request->is('post')) {
      $offer = $this->jobOffer->patchEntity($offer, $this->request->getData());
      date_default_timezone_set('Europe/Warsaw');
      $offer->post_date = date("Y-m-d H:i:s",time());
      $offer->change_date = date("Y-m-d H:i:s",time());
      $currentTime = time();
      $validTime = $currentTime+(60*43200);
      $offer->valid_to = date("Y-m-d H:i:s",$validTime);
      $order   = array("\r\n", "\n", "\r");
      $replace = '<br />';
      $offer->description = str_replace($order, $replace, $offer->description);
      
      $location_data_name = strtolower(str_replace('Ś','s',(str_replace('ś','s',(str_replace('Ą','a',(str_replace('Ó','o',(str_replace('Ć','c',(str_replace('Ę','e',(str_replace('Ł','l',(str_replace('Ź','z',(str_replace('Ż','z',(str_replace('Ń','n',(str_replace('-','',str_replace(';','',str_replace(',','',str_replace('.', '',str_replace(' ','',str_replace('ł','l',
      str_replace('ę','e',str_replace('ą','a',str_replace('ź','z',str_replace('ż','z',str_replace('ó','o',str_replace('ń','n', $offer->city)))))))))))))))))))))))))))))))));

      $offer->location_data_name = $location_data_name;
      
        if ($this->jobOffer->save($offer)) {
          $offer_saved_id = $offer->id;
          
          $invo_url = $this->transaction($offer->apply_email, $this->request->getData()['amount'], $this->request->getData()['service'], $offer->company_name, $this->request->getData()['company_tax'],
          $this->request->getData()['company_street'], $this->request->getData()['company_city'], $this->request->getData()['postal_code'], $this->request->getData()['company_country'], 'Paid');
          
          if(/*transaction_paid*/ true) {
            if($this->editToken($offer_saved_id, date("Y-m-d H:i:s",$validTime), $offer->apply_email)){
              
            } else {
              
            }
          } 
          
          $email = new Email('default');
            if($email->setTo($offer->apply_email)
            ->setSubject("New job offer for " . strtoupper($this->request->getData()['job_title']) . " posted!")
            ->setEmailFormat('html')
            ->setTemplate('default')
            ->setLayout('jobpost')
            ->setViewVars(['offer_id' => $offer_saved_id,'job_title' => $this->request->getData()['job_title']])
            ->setAttachments(array($invo_url))
            ->send())

          $this->Flash->success(__('Job offer has been saved. You will receive confirmation email.'));
          return $this->redirect($this->Auth->redirectUrl('/users/jobdetails/' . $offer_saved_id));
        } else {
          $this->Flash->error(__('Job offer could not be saved. Please contact us, or try again.'));
          return $this->redirect($this->Auth->redirectUrl('/'));          
        }
    }
    }

//// loginAction

public function login()
    {
      $uid = $this->Auth->user()['id'];
      if($uid) {
      $this->Flash->success(__('You are already logged in!'));
      return $this->redirect($this->Auth->redirectUrl('/'));
      }

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
              
              if( $user['role'] === 'ADMIN') {
                   $this->Flash->success(__('Welcome to admin panel!'));
                   return $this->redirect($this->Auth->redirectUrl('/admin/'));
                } 
                                        
              else if ($user['role'] === 'EMPL_NOT_VERIFIED') {
                $this->Auth->logout();
                $this->Flash->set('Your account is not verified. Please check your activation email.', [
                'element' => 'error'
                ]);
                return $this->redirect($this->Auth->redirectUrl('/'));
              }
              else if ($user['valid'] == '') {
                $this->Auth->logout();
                /////go to payment
                $this->Flash->set('Your payment has not been verified yet. To process payment again go into "PAYMENT" section', [
                'element' => 'error'
                ]);
                return $this->redirect($this->Auth->redirectUrl('/'));
              }
              
              else if ($user['valid_to'] > date("Y-m-d H:i:s", time()) || $user['valid_to']==NULL) {
                $this->Auth->logout();
                /////go to payment
                $this->Flash->set('Your package is not active, or expired. Please go into "PAYMENT" section.', [
                'element' => 'error'
                ]);
                return $this->redirect($this->Auth->redirectUrl('/'));
              }
              else if ($user['role'] === 'EMPL_STANDARD') {
                  $this->Flash->success(__('Welcome to What\'s SAP!'));
                   return $this->redirect($this->Auth->redirectUrl('/employer/emplpanel'));
                }
              
              else if ($user['role'] === 'EMPL_PREMIUM') {
                  $this->Flash->success(__('Welcome to What\'s SAP!'));
                   return $this->redirect($this->Auth->redirectUrl('/employer/emplpanel'));
                }
              else {
                $this->Auth->logout();
                $this->Flash->set('Log in with employer account. To log in as candidate, please find "LOGIN" section in menu.', [
                'element' => 'error'
                ]);
                return $this->redirect($this->Auth->redirectUrl('/'));
              }
            } else {
            $this->Flash->set('Invalid credentials. Please try again.', [
            'element' => 'error'
            ]);
            return $this->redirect($this->Auth->redirectUrl('/'));
            }
        } else {
          $this->Flash->error(__('To access this location, you need to log in first.'));
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

  
  public function payment() {
    
    if ($this->request->is('post')) {
               
    if( $this->request->getData()["status"]=="FAIL" ) {
      return $this->redirect($this->Auth->redirectUrl('/employer/paymentfailed'));   
    }
    else if ( $this->request->getData()["status"]=="OK" ) {
      $this->Flash->success(__('Registration complete. Please wait for your payment confirmation email.')); 
      return $this->redirect($this->Auth->redirectUrl('/employer/paymentsuccess'));
    }    
   }
    
  }
  
  public function paymentsuccess() {
    
    
    
  }
  
  public function paymentfailed() {
    
    
    
  }
  
  public function paystat() {
        
  if ($this->request->is('post')) {
    $request = $this->request->getData();
    
    $PIN = "ofvoflr7dulekZ7rfs0lXW9gkGmA0sqa";

    $sign=
    $PIN.
    $request['id'].
    $request['operation_number'].
    $request['operation_type'].
    $request['operation_status'].
    $request['operation_amount'].
    $request['operation_currency'].
    $request['operation_original_amount'].
    $request['operation_original_currency'].
    $request['operation_datetime'].
    $request['control'].
    $request['description'].
    $request['email'].
    $request['p_info'].
    $request['p_email'].
    $request['channel'];
  
    $signature=hash('sha256', $sign);
    
    if($this->request->getData()["signature"]==$signature) {
    
    $this->loadModel("Transactions");
    
    if(!empty($this->Transactions->find('all', array(
        'conditions' => array('transaction_id' => $request['control'])))->first())) {
      
      $tx = $this->Transactions->find('all', array(
        'conditions' => array('transaction_id' => $request['control'], 'status' => 'NEW')))->first();
      
      if($request['description'] == "What's SAP Premium Employer Account") {
        $service = "PREMIUM_PACKAGE";
      } else if ($request['description'] == "What's SAP Standard Employer Account") {
        $service = "STANDARD_PACKAGE";
      } else {
        $service = "No matched service";
      $response = "Service not recognized.";
      }
      
      if($tx["amount"]==$request['operation_amount'] && $tx['service']==$service && $request['operation_currency'] =="PLN") {
        
        if($request['operation_status']=="completed") {
          $tx->status = "COMPLETED";
                 
          ////update account to valid
            $this->loadModel("Users");
            $this->loadModel("companyInfo");
            
            $user = $this->Users->find('all', array(
            'conditions' => array('email' => $tx['email'])))->select()->first();
            
            $info = $this->companyInfo->find('all', array(
            'conditions' => array('company_id' => $user['id'])))->select()->first();
            
            $invo_id = ($this->Transactions->find('all',['fields'=>'id'])->last()['id'])+1;

            $invo_url = $this->invoiceGen($invo_id, $user['email'], $tx['amount'], 
            $tx['service'], $info['company_name'], $info['tax_num'], 
            $info['address'], $info['city'], $info['postal_code'], $info['country'], 'PAID');

            $tx->invoice_url == $invo_url;
                  
            $user->valid = 'X';
            date_default_timezone_set('Europe/Warsaw');
            $currentDate = new Time();
            $validDate = $currentDate->modify('+365 day')->format('Y-m-d H:i:s');
            $user->valid_to = $validDate;
            
            $this->Users->save($user);
            $this->Transactions->save($tx);
          
            $email = new Email('default');
            $email->setTo($user['email'])
            ->setSubject("Your Payment is Confirmed!")
            ->setEmailFormat('html')
            ->setTemplate('default')
            ->setLayout('paymentconfirm')
            ->setViewVars(['email' => $user['email'],'service' => $request['description']])
            ->setAttachments(array($invo_url))
            ->send();
                    
          $response = "OK";
        }
        else if ($request['operation_status']=="rejected") {
          $tx->status = "REJECTED";
          $this->Transactions->save($tx);          
          $response = "FAIL";
        } else {
        $response = "Status not recognized.";
        }
        
      } else {
      $response = "Transaction not recognized.";
    }
      
    } else {
      $response = "Transaction not found.";
    }
  
   } else {
      $response =  "Signature not valid.";
    }
   
    $this->set('response', $response);
    
  }
    
  }

//invoice generator action

private function invoiceGen($invo_id, $email, $amount, 
  $service, $company_name, $company_tax, 
  $company_street, $company_city, $company_postal, $company_country, $status){
        
$pdf = new \tcpdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

if ($service == "SINGLE_POST") {
  $service = 'Single Job Offer Post';
} else if ($service == "PREMIUM_PACKAGE") {
  $service = "What's SAP Premium Employer Account";
} else if($service == "STANDARD_PACKAGE") {
  $service = "What's SAP Standard Employer Account";
}
  
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
TAX NUM: 999999999</p>
</td>
<td width="360">
<p align="right" style="font-size:10px;">BUYER:<br>
' . mb_convert_case($company_name, MB_CASE_UPPER, "UTF-8") . '<br>
' . mb_convert_case($company_street, MB_CASE_UPPER, "UTF-8") . '<br>
' . mb_convert_case($company_postal, MB_CASE_UPPER, "UTF-8") . '<br>
' . mb_convert_case($company_city, MB_CASE_UPPER, "UTF-8") . '<br>
' . mb_convert_case($company_country, MB_CASE_UPPER, "UTF-8") . '<br>
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
' . $amount . ' PLN
</p>
</td>
<td width="70" style="font-size:10px;">
<p align="right">
23%
</p>
</td>
<td width="70" style="font-size:10px;">
<p align="right">
' . number_format(round($amount * 1.23, 2 , PHP_ROUND_HALF_EVEN), 2, '.', '') . ' PLN
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
TOTAL GROSS: ' . number_format(round($amount * 1.23, 2 ,PHP_ROUND_HALF_EVEN), 2, '.', '') . ' PLN
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

private function transaction($email, $amount, 
  $service, $company_name, $company_tax, 
  $company_street, $company_city, $company_postal, $company_country, $status){

  $this->loadModel('Transactions');
  $transaction = $this->Transactions->newEntity();
  
  $transaction_id  = str_replace('-','',Text::uuid());
  $transaction->transaction_id = strtolower($transaction_id);
  $transaction->email = strtolower($email);
  $transaction->status = strtolower($status);
  $transaction->amount = $amount;
  $transaction->status = 'NEW';
  
  ///transaction type
  if($service == "Single Job Offer Post") {
  $transaction->service = "SINGLE_POST";
  $service = 'Single Job Offer Post';  
  } 
  else if ($service == "Standard Employer Package") {
  $transaction->service = "STANDARD_PACKAGE";
  $service = 'Standard Employer Package';
  }
  else if ($service == "Premium Employer Package") {
  $transaction->service = "PREMIUM_PACKAGE";
  $service = 'Premium Employer Package';
  }

  
  ///logic for single post
  if ($transaction->service == "SINGLE_POST") {
    
  $transaction->status = strtolower($status);  
  $invo_id = ($this->Transactions->find('all',['fields'=>'id'])->last()['id'])+1;

  $invo_url = $this->invoiceGen($invo_id, $email, $amount, 
  $service, $company_name, $company_tax, 
  $company_street, $company_city, $company_postal, $company_country, $status);

  $transaction->invoice_url = $invo_url;

  $this->Transactions->save($transaction);

  return $transaction->invoice_url;
    
  } 
  else {
    $this->Transactions->save($transaction);
    return $transaction_id;
  }

}

// transaction save
  
  
  
// generate edit token
  
private function editToken($offer_id, $valid_to, $email){

  $this->loadModel('EditTokens');
  $token = $this->EditTokens->newEntity();
  
  $token->token_hash = str_replace('-','',Text::uuid());
  $token->valid_to = $valid_to;
  $token->offer_id = $offer_id;
  $token->email = $email;
  
  if($this->EditTokens->save($token)){
    return $token->token_hash;
  }  
  else {
    return false;
  }

}

// end generate edit token aciton
  
  
  
///// employer register
  
  public function register(){
    
    $uid = $this->Auth->user()['id'];
  if($uid) {
  $this->Flash->error(__('You are already logged in.'));
  return $this->redirect($this->Auth->redirectUrl('/employer/emplpanel'));
  }

  if ($this->request->is('post')) {
  $this->loadModel('companyInfo');
  $this->loadModel('Users');
  $entity = $this->Users->newEntity();
  $info = $this->companyInfo->newEntity();
  $entity = $this->Users->patchEntity($entity, $this->request->getData());
  $info = $this->companyInfo->patchEntity($info, $this->request->getData());

    if (!empty($this->request->getData('applying_email')) &&
      !empty($this->request->getData('password')) &&
      !empty($this->request->getData('password_confirm')) &&
      !empty($this->request->getData('company_name')))
      {
        if($this->request->getData(['password']) == $this->request->getData(['password_confirm']))
        {
          
          $entity->email = $this->request->getData(['applying_email']);
          $entity->role = 'EMPL_NOT_VERIFIED';
          
            
          if(!$entity->getErrors())
          {

      //check if save operations success
      if($this->Users->save($entity)){

      $info->company_id = $entity->id;
      $this->companyInfo->save($info);
        
        
      $this->loadModel('validateTokens');
      $token_entry = $this->validateTokens->newEntity();

      $token  = str_replace('-','',Text::uuid());
      $token_entry->token_hash = $token;
      $token_entry->user_id = $entity->id;
      $token_entry->email = $entity->email;
      
        
        ///!!!!!!!!!!!!!!!! standard account type - to change !!!!!!!!!!!!!!!!
        if($this->request->getData()['service']=='Premium Employer Package') {
        $token_entry->account_type = 'EMPL_PREMIUM';
        }
        else if($this->request->getData()['service']=='Standard Employer Package'){
        $token_entry->account_type = 'EMPL_STANDARD';  
        }
        else {
          $this->Flash->error(__('Selected package does not exist. Please select one of the provided packages.'));
          return $this->redirect($this->Auth->redirectUrl('/employer/register'));
        }
        /////

      ///send registration token
      if($this->validateTokens->save($token_entry)){
      $email = new Email('default');
            if($email->setTo($entity->email)
            ->setSubject("Account verification")
            ->setTemplate('default')
            ->setSender('contact@whatssap.it','What\'s SAP')
            ->setLayout('employeractivateEmail')
            ->setEmailFormat('html')
            ->setViewVars(['token' => $token])
            ->send()){
          
              
              if($this->request->getData()["amount"]=='2990') {
              ///standard package
                    $tx = $this->transaction($entity->email, $this->request->getData()["amount"], 
                    $this->request->getData()["service"], $info->company_name, $info->tax_num, 
                    $info->address, $info->city, $info->postal_code, $info->country, 'NEW');
                               
                  if(!empty($tx)) {
                    
                    $ParametersArray = array (
                     "api_version" => "dev",
                     "lang" => "EN",
                     "amount" => "2990",
                     "currency" => "PLN",
                     "description" => "What's SAP Standard Employer Account",
                     "url" => "http://whatssap.it/employer/payment",
                     "type" => "0",
                     "buttontext" => "Back to What's SAP",
                     "control" => $tx
                  );
                    
                    $link = $this->GenerateChkDotpayRedirection ("732409","ofvoflr7dulekZ7rfs0lXW9gkGmA0sqa", "test", "POST",
                    $ParametersArray, array());
                  
                     $this->set('link', $link);
                     $this->set('service', "What's SAP Standard Employer Account");
                     $this->viewBuilder()->setLayout('ordersummary');
                   
                    }
                }
              
              else if($this->request->getData()["amount"]=='4990'){
              ///premium package
                    $tx = $this->transaction($entity->email, $this->request->getData()["amount"], 
                    $this->request->getData()["service"], $info->company_name, $info->tax_num, 
                    $info->address, $info->city, $info->postal_code, $info->country, 'NEW');
                
                if(!empty($tx)) { 
                    
                  $ParametersArray = array (
                     "api_version" => "dev",
                     "lang" => "EN",
                     "amount" => "4990",
                     "currency" => "PLN",
                     "description" => "What's SAP Premium Employer Account",
                     "url" => "http://whatssap.it/employer/payment",
                     "type" => "0",
                     "buttontext" => "Back to What's SAP",
                     "control" => $tx
                  );
                    
                    $link = $this->GenerateChkDotpayRedirection ("732409","ofvoflr7dulekZ7rfs0lXW9gkGmA0sqa", "test", "POST",
                    $ParametersArray, array());
                  
                    $this->set('link', $link);
                    $this->set('service', "What's SAP Premium Employer Account");
                    $this->viewBuilder()->setLayout('ordersummary');
                  
                }   
              }
              else {
                $this->Flash->error(__('The order amount is incorrect. Please select one of the provided packages.'));
                return $this->redirect($this->Auth->redirectUrl('/employer/register'));
              }
             
          }  else {
      $this->Flash->error(__('We couldn\'t send you the activation email. Please try again.'));
      return $this->redirect($this->Auth->redirectUrl('/employer/register'));
      }     
        }  else {
      $this->Flash->error(__('Something went wrong. Please try again'));
      return $this->redirect($this->Auth->redirectUrl('/employer/register'));
      }
          
      } else {
      $this->Flash->error(__('Account with given email address already exists. You can log in.'));
      return $this->redirect($this->Auth->redirectUrl('/'));
      }
        }
      }
      else {
      return $this->Flash->error(__('Given passwords need to be identical.'));
      }
    }
    else {
    $this->Flash->error(__('Fill all mandatory data.'));
    //return $this->redirect($this->Auth->redirectUrl('/employer/emplregister'));
        }
      }
    
  }
  
  
  
  
///// end of employer register
  
  
  ///validate account action
  
  public function validateAccount($token_hash) {
      
      $this->loadModel('validateTokens');
      $this->loadModel('Users');
    
      date_default_timezone_set('Europe/Warsaw');
          
      if(!empty($this->validateTokens->find('all', array(
        'conditions' => array('token_hash' => $token_hash)))->select()->first())) {
          
       $entry = $this->Users->find('all')->join([
        'tokens' => [
            'table' => 'validate_tokens',
            'type' => 'INNER',
            'conditions' => array('tokens.user_id = Users.id', 'token_hash' => $token_hash)
        ]
       ])->select([
        'Users.id', 
        'tokens.account_type'
        ])->where(['account_type' => 'EMPL_PREMIUM'])->orWhere(['account_type' => 'EMPL_STANDARD'])->first();
       
        $update_table = TableRegistry::get('Users');
        $update_row = $update_table->get($entry->id);
        $update_row->role = $entry->tokens['account_type'];
        
        if($this->Users->save($update_row)) {
        $this->validateTokens->deleteAll(array('forgetTokens.user_id' => $update_row->id)); 
        $this->Flash->success(__("Your account has been activated. You can log in!"));
        return $this->redirect($this->Auth->redirectUrl('/'));
        } else {
          $this->Flash->error(__("Something went wrong. Please try again."));
          return $this->redirect($this->Auth->redirectUrl('/'));
        }

      } else {
        $this->Flash->error(__('Your activation link is not valid.'));
        return $this->redirect($this->Auth->redirectUrl('/'));
      }
    
  }
  
  
  
///end of validate action
 
  
  //////employer panel
  
  public function emplpanel() {
    
    
  }
  
  
  //////
 
  
  
  ////////generator DotPayCheck
  
  function GenerateChk($DotpayId, $DotpayPin, $Environment, $RedirectionMethod,
$ParametersArray,$MultiMerchantList)
{
 $ParametersArray['id'] = $DotpayId;
 $chk = $DotpayPin.
 (isset($ParametersArray['api_version']) ? $ParametersArray['api_version'] : null).
 (isset($ParametersArray['charset']) ? $ParametersArray['charset'] : null).
 (isset($ParametersArray['lang']) ? $ParametersArray['lang'] : null).
 (isset($ParametersArray['id']) ? $ParametersArray['id'] : null).
 (isset($ParametersArray['pid']) ? $ParametersArray['pid'] : null).
 (isset($ParametersArray['amount']) ? $ParametersArray['amount'] : null).
 (isset($ParametersArray['currency']) ? $ParametersArray['currency'] : null).
 (isset($ParametersArray['description']) ? $ParametersArray['description'] : null).
 (isset($ParametersArray['control']) ? $ParametersArray['control'] : null).
 (isset($ParametersArray['channel']) ? $ParametersArray['channel'] : null).
 (isset($ParametersArray['credit_card_brand']) ? $ParametersArray['credit_card_brand'] : null).
 (isset($ParametersArray['ch_lock']) ? $ParametersArray['ch_lock'] : null).
 (isset($ParametersArray['channel_groups']) ? $ParametersArray['channel_groups'] : null).
 (isset($ParametersArray['onlinetransfer']) ? $ParametersArray['onlinetransfer'] : null).
 (isset($ParametersArray['url']) ? $ParametersArray['url'] : null).
 (isset($ParametersArray['type']) ? $ParametersArray['type'] : null).
 (isset($ParametersArray['buttontext']) ? $ParametersArray['buttontext'] : null).
 (isset($ParametersArray['urlc']) ? $ParametersArray['urlc'] : null).
 (isset($ParametersArray['firstname']) ? $ParametersArray['firstname'] : null).
 (isset($ParametersArray['lastname']) ? $ParametersArray['lastname'] : null).
 (isset($ParametersArray['email']) ? $ParametersArray['email'] : null).
 (isset($ParametersArray['street']) ? $ParametersArray['street'] : null).
 (isset($ParametersArray['street_n1']) ? $ParametersArray['street_n1'] : null).
 (isset($ParametersArray['street_n2']) ? $ParametersArray['street_n2'] : null).
 (isset($ParametersArray['state']) ? $ParametersArray['state'] : null).
 (isset($ParametersArray['addr3']) ? $ParametersArray['addr3'] : null).
 (isset($ParametersArray['city']) ? $ParametersArray['city'] : null).
 (isset($ParametersArray['postcode']) ? $ParametersArray['postcode'] : null).
 (isset($ParametersArray['phone']) ? $ParametersArray['phone'] : null).
 (isset($ParametersArray['country']) ? $ParametersArray['country'] : null).
 (isset($ParametersArray['code']) ? $ParametersArray['code'] : null).
 (isset($ParametersArray['p_info']) ? $ParametersArray['p_info'] : null).
 (isset($ParametersArray['p_email']) ? $ParametersArray['p_email'] : null).
 (isset($ParametersArray['n_email']) ? $ParametersArray['n_email'] : null).
 (isset($ParametersArray['expiration_date']) ? $ParametersArray['expiration_date'] : null).
 (isset($ParametersArray['deladdr']) ? $ParametersArray['deladdr'] : null).
 (isset($ParametersArray['recipient_account_number']) ? $ParametersArray['recipient_account_number'] : null).
 (isset($ParametersArray['recipient_company']) ? $ParametersArray['recipient_company'] : null).
 (isset($ParametersArray['recipient_first_name']) ? $ParametersArray['recipient_first_name'] : null).
 (isset($ParametersArray['recipient_last_name']) ? $ParametersArray['recipient_last_name'] : null).
 (isset($ParametersArray['recipient_address_street']) ? $ParametersArray['recipient_address_street'] : null).
 (isset($ParametersArray['recipient_address_building']) ? $ParametersArray['recipient_address_building'] : null).
 (isset($ParametersArray['recipient_address_apartment']) ? $ParametersArray['recipient_address_apartment'] : null).
 (isset($ParametersArray['recipient_address_postcode']) ? $ParametersArray['recipient_address_postcode'] : null).
 (isset($ParametersArray['recipient_address_city']) ? $ParametersArray['recipient_address_city'] : null).
 (isset($ParametersArray['application']) ? $ParametersArray['application'] : null).
 (isset($ParametersArray['application_version']) ? $ParametersArray['application_version'] : null).
 (isset($ParametersArray['warranty']) ? $ParametersArray['warranty'] : null).
 (isset($ParametersArray['bylaw']) ? $ParametersArray['bylaw'] : null).
 (isset($ParametersArray['personal_data']) ? $ParametersArray['personal_data'] : null).
 (isset($ParametersArray['credit_card_number']) ? $ParametersArray['credit_card_number'] : null).
 (isset($ParametersArray['credit_card_expiration_date_year']) ? $ParametersArray['credit_card_expiration_date_year'] : null).
 (isset($ParametersArray['credit_card_expiration_date_month']) ? $ParametersArray['credit_card_expiration_date_month'] : null).
 (isset($ParametersArray['credit_card_security_code']) ? $ParametersArray['credit_card_security_code'] : null).
 (isset($ParametersArray['credit_card_store']) ? $ParametersArray['credit_card_store'] : null).
 (isset($ParametersArray['credit_card_store_security_code']) ? $ParametersArray['credit_card_store_security_code'] : null).
 (isset($ParametersArray['credit_card_customer_id']) ? $ParametersArray['credit_card_customer_id'] : null).
 (isset($ParametersArray['credit_card_id']) ? $ParametersArray['credit_card_id'] : null).
 (isset($ParametersArray['blik_code']) ? $ParametersArray['blik_code'] : null).
 (isset($ParametersArray['credit_card_registration']) ? $ParametersArray['credit_card_registration'] : null).
 (isset($ParametersArray['surcharge_amount']) ? $ParametersArray['surcharge_amount'] : null).
 (isset($ParametersArray['surcharge']) ? $ParametersArray['surcharge'] : null).
 (isset($ParametersArray['surcharge']) ? $ParametersArray['surcharge'] : null).
 (isset($ParametersArray['ignore_last_payment_channel']) ? $ParametersArray['ignore_last_payment_channel'] : null).
 (isset($ParametersArray['vco_call_id']) ? $ParametersArray['vco_call_id'] : null).
 (isset($ParametersArray['vco_update_order_info']) ? $ParametersArray['vco_update_order_info'] : null).
 (isset($ParametersArray['vco_subtotal']) ? $ParametersArray['vco_subtotal'] : null).
 (isset($ParametersArray['vco_shipping_handling']) ? $ParametersArray['vco_shipping_handling'] : null).
 (isset($ParametersArray['vco_tax']) ? $ParametersArray['vco_tax'] : null).
 (isset($ParametersArray['vco_discount']) ? $ParametersArray['vco_discount'] : null).
 (isset($ParametersArray['vco_gift_wrap']) ? $ParametersArray['vco_gift_wrap'] : null).
 (isset($ParametersArray['vco_misc']) ? $ParametersArray['vco_misc'] : null).
 (isset($ParametersArray['vco_promo_code']) ? $ParametersArray['vco_promo_code'] : null).
 (isset($ParametersArray['credit_card_security_code_required']) ? $ParametersArray['credit_card_security_code_required'] : null).
 (isset($ParametersArray['credit_card_operation_type']) ? $ParametersArray['credit_card_operation_type'] : null).
 (isset($ParametersArray['credit_card_avs']) ? $ParametersArray['credit_card_avs'] : null).
 (isset($ParametersArray['credit_card_threeds']) ? $ParametersArray['credit_card_threeds'] : null);

 foreach ($MultiMerchantList as $item)
 {
 foreach($item as $key => $value) {
 $chk = $chk.
 (isset($value) ? $value : null);
 }
 }
 return $chk;
}
  
  
  ////////end of generator


////link for payment generate
function GenerateChkDotpayRedirection ($DotpayId, $DotpayPin, $Environment, $RedirectionMethod,
$ParametersArray, $MultiMerchantList) {

 $ParametersArray['id'] = $DotpayId;
 $ChkParametersChain = $this->GenerateChk($DotpayId, $DotpayPin, $Environment, $RedirectionMethod,
$ParametersArray,$MultiMerchantList);
 $ChkValue = hash('sha256',$ChkParametersChain);
 if ($Environment == 'production') $EnvironmentAddress = 'https://ssl.dotpay.pl/t2/';
 else if ($Environment == 'test') $EnvironmentAddress = 'https://ssl.dotpay.pl/test_payment/';
if ($RedirectionMethod == 'POST') {
 $RedirectionCode = '<form action="'.$EnvironmentAddress.'" method="POST"
 id="dotpay_redirection_form">'.PHP_EOL;

 foreach($ParametersArray as $key => $value) {
 $RedirectionCode .= "\t".'<input name="'.$key.'" value="'.$value.'"
type="hidden"/>'.PHP_EOL;
 }
 foreach ($MultiMerchantList as $item)
 {
 foreach($item as $key => $value) {
 $RedirectionCode .= "\t".'<input name="'.$key.'" value="'.$value.'"
type="hidden"/>'.PHP_EOL;
 }
 }
 $RedirectionCode .= "\t".'<input name="chk" value="'.$ChkValue.'" type="hidden"/>'.PHP_EOL;
 $RedirectionCode .= '</form>'.PHP_EOL.
 '<button class="btn navbar-btn btn-outline-light mb-5 mb-lg-0" id="dotpay_redirection_button" type="submit" form="dotpay_redirection_form"
 value="Submit">Go to payment</button>'.PHP_EOL;
 return $RedirectionCode;
 }

 else if ($RedirectionMethod == 'GET') {
 $RedirectionCode = $EnvironmentAddress.'?';
 foreach($ParametersArray as $key => $value) {
 $RedirectionCode .= $key.'='.rawurlencode($value).'&';
 }

 foreach ($MultiMerchantList as $item)
 {
 foreach($item as $key => $value) {
 $RedirectionCode .= $key.'='.rawurlencode($value).'&';
 }
 }
 $RedirectionCode .= 'chk='.$ChkValue;
 return $RedirectionCode;
 }
}
  
///end of link generation 

//end of controller
}
