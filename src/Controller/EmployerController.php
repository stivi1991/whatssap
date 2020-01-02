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
          
          $editToken = $this->editToken($offer_saved_id, date("Y-m-d H:i:s",$validTime), $offer->apply_email);
          $deleteToken = $this->deleteToken($offer_saved_id, date("Y-m-d H:i:s",$validTime), $offer->apply_email);
          
          $email = new Email('default');
            if($email->setTo($offer->apply_email)
            ->setSubject("New job offer for " . strtoupper($this->request->getData()['job_title']) . " posted!")
            ->setEmailFormat('html')
            ->setTemplate('default')
            ->setLayout('jobpost')
            ->setViewVars(['offer_id' => $offer_saved_id,'job_title' => $this->request->getData()['job_title'],'edit_token' => $editToken,'delete_token' => $deleteToken])
            ->send())

          $this->Flash->success(__('Job offer has been saved. You will receive confirmation email.'));
          return $this->redirect($this->Auth->redirectUrl('/users/jobdetails/' . $offer_saved_id));
        } else {
          $this->Flash->error(__('Job offer could not be saved. Please contact us, or try again.'));
          return $this->redirect($this->Auth->redirectUrl('/'));          
        }
    }
    }

  
  
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

// generate delete token
  
private function deleteToken($offer_id, $valid_to, $email){

  $this->loadModel('DeleteTokens');
  $token = $this->DeleteTokens->newEntity();
  
  $token->token_hash = str_replace('-','',Text::uuid());
  $token->valid_to = $valid_to;
  $token->offer_id = $offer_id;
  $token->email = $email;
  
  if($this->DeleteTokens->save($token)){
    return $token->token_hash;
  }  
  else {
    return false;
  }

}

// end generate edit token aciton
  

public function editOffer($token_hash) { 
  
  
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

      $this->loadModel('EditTokens');
      $this->loadModel('jobOffer');
      
      $check_token = $this->EditTokens->find('all', array('conditions' => array('token_hash' => $token_hash)))->first();
       
      if(!empty($check_token)) {
        
          $offer_data = $this->jobOffer->find('all', array('conditions' => array('id' => $check_token->offer_id)))->first();
          $this->set('offer_data', $offer_data);
        
      } else {
        $this->Flash->error(__('Your edition link is wrong, or not valid anymore.'));
        return $this->redirect($this->Auth->redirectUrl('/'));
      }

      if ($this->request->is('post')) {
        
        $offer_data = $this->jobOffer->patchEntity($offer_data, $this->request->getData());
        
        if($this->jobOffer->save($offer_data)) {
            $this->Flash->success(__('Job offer has been saved.'));
            return $this->redirect($this->Auth->redirectUrl('/users/jobdetails/' . $offer_data->id));
        }
        
      }
    }
    
  
  
public function deleteOffer($token_hash) { 
      
      $this->loadModel('DeleteTokens');
      $this->loadModel('jobOffer');
      
      $check_token = $this->DeleteTokens->find('all', array('conditions' => array('token_hash' => $token_hash)))->first();
       
      if(!empty($check_token)) {
        
          $offer_data = $this->jobOffer->find('all', array('conditions' => array('id' => $check_token->offer_id)))->first();
          $this->set('offer_data', $offer_data);
        
      } else {
        $this->Flash->error(__('Your deletion link is wrong, or not valid anymore.'));
        return $this->redirect($this->Auth->redirectUrl('/'));
      }

      if ($this->request->is('post')) {          
        
        $token_entry = $this->DeleteTokens->find('all', array('conditions' => array('token_hash' => $token_hash)))->first();

        $this->jobOffer->deleteAll(['id' => $token_entry->offer_id]);
        $this->Flash->success(__('Job offer deleted, thanks for using Whats SAP. Post a new one!'));
        return $this->redirect($this->Auth->redirectUrl('/'));  
          
      }
    }
  
//end of controller
}
