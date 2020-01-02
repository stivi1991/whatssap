<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Filesystem\Folder;
use Cake\Mailer\Email;
use Cake\Utility\Text;
use Cake\ORM\Query;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

var $name = 'Users';
var $helpers = array('Html', 'Form');
var $scaffold;

  
  
  public function beforeFilter(Event $event) {
          parent::beforeFilter($event);
     
     $this->set('User', $this->Auth->user());
   }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $user = $this->Auth->user();

    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

//// loginAction

function login()
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
              
              else if ($user['role'] === 'CAND_VERIFIED') {
                  $this->Flash->success(__('Welcome to What\'s SAP!'));
                   return $this->redirect($this->Auth->redirectUrl('/users/userpanel'));
                }
              else if ($user['role'] === 'CAND_NOT_VERIFIED') {
                $this->Auth->logout();
                $this->Flash->set('Your account is not verified. Please check your activation email.', [
                'element' => 'error'
                ]);
                return $this->redirect($this->Auth->redirectUrl('/'));
              }
              else {
                $this->Auth->logout();
                $this->Flash->set('Log in with candidate account. To log in as employer, please find "FOR EMPLOYERS" section in menu.', [
                'element' => 'error'
                ]);
                return $this->redirect($this->Auth->redirectUrl('/'));
              }
            }
            $this->Flash->set('Invalid credentials. Please try again.', [
            'element' => 'error'
            ]);
            return $this->redirect($this->Auth->redirectUrl('/'));
        } else {
          $this->Flash->error(__('To access this location, you need to log in first.'));
          return $this->redirect($this->Auth->redirectUrl('/'));      
        }
    }
/// end of login action

////logout action
    public function logout(){
        if($this->Auth->logout()) {
        $this->Flash->success(__('You have been successfuly logged out. See you soon!'));
        $this->redirect('/');
        }
    }
///end of logout


////// register action
public function register() {

  $uid = $this->Auth->user()['id'];
  if($uid) {
  $this->Flash->error(__('You are already logged in.'));
  return $this->redirect($this->Auth->redirectUrl('/users/userpanel'));
  }

  if ($this->request->is('post')) {
  $this->loadModel('personalInfo');
  $this->loadModel('candSkills');
  $entity = $this->Users->newEntity();
  $info = $this->personalInfo->newEntity();
  $entity = $this->Users->patchEntity($entity, $this->request->getData());
  $info = $this->personalInfo->patchEntity($info, $this->request->getData());

    if (!empty($this->request->getData('email')) &&
      !empty($this->request->getData('password')) &&
      !empty($this->request->getData('password_confirm')) &&
      !empty($this->request->getData('name_first')) &&
      !empty($this->request->getData('name_last')))
      {
        if($this->request->getData(['password']) == $this->request->getData(['password_confirm']))
        {
          
          $entity->role = 'CAND_NOT_VERIFIED';
            
          if(!$entity->getErrors())
          {

      //check if save operations success
      if($this->Users->save($entity)){
              
        
      $uploadDir = 'User/CV/' . $entity->id . DS;


      // check if folder exist, if not, create
      if (!file_exists(ROOT . DS . $uploadDir)) {
      $dir = new Folder(ROOT . DS . $uploadDir, true);
      }

      $file_target = ROOT . DS . $uploadDir . $this->request->getData()['candidate_cv']['name'];

      //file upload
      $cv_tmp = $this->request->getData()['candidate_cv']['tmp_name'];
      move_uploaded_file($cv_tmp, $file_target);
      
      $info->cv_url = $file_target;
      $info->user_id = $entity->id;
      $this->personalInfo->save($info);
        
      ////save skills
               
        for($i=0;$i<=$this->request->getData()['skill_number'];$i++) {
          if(!empty($this->request->getData()[$i . '_skill_name'])) {
            $skills = $this->candSkills->newEntity();
            $skills->user_id = $entity->id;
            $skills->skill_name = $this->request->getData()[$i . '_skill_name'];
            $skills->skill_level = $this->request->getData()[$i . '_rating'];
            $this->candSkills->save($skills);            
          }
        }
        
      ////////////////////////////
        
      $this->loadModel('validateTokens');
      $this->loadModel('Users');
      $token_entry = $this->validateTokens->newEntity();

      $token  = str_replace('-','',Text::uuid());
      $token_entry->token_hash = $token;
      $token_entry->user_id = $entity->id;
      $token_entry->email = $entity->email;
      $token_entry->account_type = 'CAND_VERIFIED';

      ///send registration token
      if($this->validateTokens->save($token_entry)){
      $email = new Email('default');
            if($email->setTo($entity->email)
            ->setSubject("Account verification")
            ->setTemplate('default')
            ->setSender('contact@whatssap.it','What\'s SAP')
            ->setLayout('activateEmail')
            ->setEmailFormat('html')
            ->setViewVars(['token' => $token])
            ->send()){

      $this->Flash->success(__('Registration complete. Please check the email to activate your account!'));
      return $this->redirect($this->Auth->redirectUrl('/'));              
          }  else {
      $this->Flash->error(__('We couldn\'t send you the activation email. Please try again.'));
      return $this->redirect($this->Auth->redirectUrl('/users/register'));
      }     
        }  else {
      $this->Flash->error(__('Something went wrong. Please try again'));
      return $this->redirect($this->Auth->redirectUrl('/users/register'));
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
    return $this->Flash->error(__('Fill all mandatory data.'));
        }
      }
    }
///end of signup action
  
  
  
  
  
  
///validate account action
  
  public function validateAccount($token_hash) {
      
      $this->loadModel('validateTokens');
      $this->loadModel('Users');
    
      date_default_timezone_set('Europe/Warsaw');
    
      if(!empty($this->validateTokens->find('all', array(
        'conditions' => array('token_hash' => $token_hash))))) {
          
       $entry = $this->Users->find('all')->join([
        'tokens' => [
            'table' => 'validate_tokens',
            'type' => 'INNER',
            'conditions' => array('tokens.user_id = Users.id', 'token_hash' => $token_hash,
            'tokens.account_type' => 'CAND_VERIFIED')]
        ])->select([
        'Users.id', 
        'tokens.account_type'
        ])->first();
 
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


///candidate panel action
  
  public function candidatepanel() {
    
    
  }

  
///end of candidate panel action
  
  
  
///job search action
public function jobsearch() {
  
   $this->loadModel('Func');
      $func = $this->Func->find('all', ['order' => 'func_desc ASC']);
      $this->set('func', $func);
      
   $this->loadModel('ExpLevels');
      $exp_levels = $this->ExpLevels->find('all');
      $this->set('exp_levels', $exp_levels);
   
   $this->loadModel('JobTypes');
      $job_types = $this->JobTypes->find('all', ['order' => 'type_desc ASC']);
      $this->set('job_types', $job_types);
  
  
  $this->loadModel('jobOffer');
  $offer = $this->jobOffer->find('all', array('order'=>'job_title'));
  $this->set('offer', $offer);
  
  foreach($offer as $offer_row){

        $offer_row->{"elapsed"} = $this->time_elapsed_string($offer_row->post_date);

      }

  $module = TableRegistry::get('Modules');
  $this->set('module', $module);

  $dist_locations = $this->jobOffer->find('all', array(
        'fields'=>[ 'city','location_data_name','country'],
        'group' => ['city, location_data_name, country'],
        'order'=> 'city ASC'));

  $this->set('dist_locations', $dist_locations);

  $dist_countries = $this->jobOffer->find('all', array(
        'fields'=>['country'],
        'order'=>'country ASC',
        'group' => ['country']));

  $this->set('dist_countries', $dist_countries);

  $this->loadModel('Modules');
  $dist_modules = $this->Modules->find('all', [
    'fields'=>['module_desc','module_data_name'],
    'order'=>'module_desc ASC',
    'group' => ['module_desc, module_data_name']])->join([
        'offers' => [
            'table' => 'job_offer',
            'type' => 'INNER',
            'conditions' => 'offers.module = Modules.module_desc'
        ]
    ]);

  $this->set('dist_modules', $dist_modules);
}
///end of job search


///job details action

    public function jobdetails($id)
    {
        $this->loadModel('jobOffer');
        $offer = $this->jobOffer->get($id, [
            'contain' => []
        ]);

        $this->set('offer', $offer);

        $number_of_recomendations = 3;

///////////////////////
////recommended both

        $similar_all = $this->jobOffer->find('all', [
            'conditions' => [ 'UPPER(city)' => strtoupper($offer->city), 'UPPER(module)' => strtoupper($offer->module), 'id !=' => $offer->id]
          , 'order' => 'rand()'
        ]);


///////////////////////
////recommended module

        if($number_of_recomendations > 0) {

        $similar_module = $this->jobOffer->find('all', [
            'conditions' => ['UPPER(module)' => strtoupper($offer->module), 'id !=' => $offer->id, 'result_all.jobOffer__id IS' => NULL],
            'order' => 'rand()'
          ])->join([
        'result_all' => [
            'table' => $similar_all,
            'type' => 'LEFT',
            'conditions' => '(result_all.jobOffer__id = id)'
        ]
        ]);
        }


    ///////////////////////
////recommended city

        if($number_of_recomendations > 0) {

        $similar_city = $this->jobOffer->find('all', [
            'conditions' => ['UPPER(city)' => strtoupper($offer->city), 'id !=' => $offer->id, 'result_all.jobOffer__id IS' => NULL,  'result_module.jobOffer__id IS' => NULL],
            'order' => 'rand()'
          ])->join([
        'result_all' => [
            'table' => $similar_all,
            'type' => 'LEFT',
            'conditions' => '(result_all.jobOffer__id = id)'
        ],
        'result_module' => [
          'table' => $similar_module,
            'type' => 'LEFT',
            'conditions' => '(result_module.jobOffer__id = id)'
        ]
        ]);
        }


    ///////////////////////
////recommended random

        if($number_of_recomendations > 0) {

        $similar_random = $this->jobOffer->find('all', [
            'conditions' => ['id !=' => $offer->id, 'result_all.jobOffer__id IS' => NULL,  'result_module.jobOffer__id IS' => NULL, 'result_city.jobOffer__id IS' => NULL],
            'order' => 'rand()'
          ])->join([
        'result_all' => [
            'table' => $similar_all,
            'type' => 'LEFT',
            'conditions' => '(result_all.jobOffer__id = id)'
        ],
        'result_module' => [
          'table' => $similar_module,
            'type' => 'LEFT',
            'conditions' => '(result_module.jobOffer__id = id)'
        ],
        'result_city' => [
          'table' => $similar_city,
            'type' => 'LEFT',
            'conditions' => '(result_city.jobOffer__id = id)'
        ]
        ]);
        }

        $this->set('similar_all', $similar_all);
        $this->set('similar_module', $similar_module);
        $this->set('similar_city', $similar_city);
        $this->set('similar_random', $similar_random);

    }

///end of job details action



///about action

        public function about()
    {

    }


///end of about action


///job apply action

        public function jobapply($offer_id, $apply_email, $job_title, $city, $country, $company_name)
    {

        $this->loadModel('JobApplies');

          $apply = $this->JobApplies->newEntity();
          if ($this->request->is('post')) {

          $apply = $this->JobApplies->patchEntity($apply, $this->request->getData());
      // check if file is a document
                //if(($this->request->data['candidate_cv']['type'] == 'image/jpeg')
                  //{

          $uploadDir = 'Attachments/CV/' . $offer_id . DS . $this->request->getData()['candidate_email'] . DS;


          // check if folder exist, if not, create
          if (!file_exists(ROOT . DS . $uploadDir)) {
           $dir = new Folder(ROOT . DS . $uploadDir, true);
          } //else {
            //$this->Flash->error(__('You have already applied for this offer.'));
            //return $this->redirect($this->Auth->redirectUrl('/users/jobdetails/' . $offer_id));
          //}

          $file_target = ROOT . DS . $uploadDir . $this->request->getData()['candidate_cv']['name'];
          $apply->cv_url = $file_target;
          date_default_timezone_set('Europe/Warsaw');
          $apply->apply_timestamp = date("Y-m-d H:i:s",time());

          //file upload
          $cv_tmp = $this->request->getData()['candidate_cv']['tmp_name'];
            move_uploaded_file($cv_tmp, $file_target);
            $email = new Email('default');
            if($email->setTo($apply_email)
            ->setSubject("New application for " . strtoupper($job_title) . ' from ' . $apply->candidate_name)
            ->setEmailFormat('html')
            ->setTemplate('default')
            ->setLayout('default')
            ->setViewVars(['offer_id' => $offer_id,'job_title' => $job_title])
            ->setAttachments(array($file_target))
            ->send()){
            if($this->JobApplies->save($apply)){
            $this->Flash->success(__('Your application has been sent. Good luck!'));
            return $this->redirect($this->Auth->redirectUrl('/users/jobdetails/' . $offer_id));
              }
            }
        //}
        }

    }

///end of job apply action


    ///email_przemek action

        public function emailPrzemek()
    {
      if ($this->request->is('post')) {

      $order   = array("\r\n", "\n", "\r");
      $replace = '<br />';
      $message = str_replace($order, $replace, $this->request->getData()['message']);

      $email = new Email('default');
            if($email->setTo("przemek@whatssap.it")
            ->setSubject("New message from " . $this->request->getData()['name'])
            ->setTemplate('default')
            ->setSender('contact@whatssap.it','What\'s SAP')
            ->setLayout('usercontact')
            ->setEmailFormat('html')
            ->setViewVars(['message' => $message, 'name' => $this->request->getData()['name'], 'email' => $this->request->getData()['email']])
            ->send())
      $this->Flash->success(__('Your email has been sent to Przemek. Thank you!'));
      return $this->redirect($this->Auth->redirectUrl('/users/about/'));

      }
    }


///end of action

    ///email_marika action

        public function emailMarika()
    {
      if ($this->request->is('post')) {

      $order   = array("\r\n", "\n", "\r");
      $replace = '<br />';
      $message = str_replace($order, $replace, $this->request->getData()['message']);

      $email = new Email('default');
            if($email->setTo("marika@whatssap.it")
            ->setSubject("New message from " . $this->request->getData()['name'])
            ->setTemplate('default')
            ->setSender('contact@whatssap.it','What\'s SAP')
            ->setLayout('usercontact')
            ->setEmailFormat('html')
            ->setViewVars(['message' => $message, 'name' => $this->request->getData()['name'], 'email' => $this->request->getData()['email']])
            ->send())
      $this->Flash->success(__('Your email has been sent to Marika. Thank you!'));
      return $this->redirect($this->Auth->redirectUrl('/users/about/'));

      }
    }


///end of action
  
  
  

    ///forget password action

        public function forgetEmail()
    { 
      $this->loadModel('forgetTokens');
      $this->loadModel('Users');
      $token_entry = $this->forgetTokens->newEntity();
      if ($this->request->is('post')) {
      $token_entry = $this->forgetTokens->patchEntity($token_entry, $this->request->getData());
      $email = $this->request->getData()['email'];

      if(!empty($this->Users->find('all', array('conditions' => array('email' => $email)))->first())) {

      $token  = str_replace('-','',Text::uuid());
      $token_entry->token_hash = $token;
      date_default_timezone_set('Europe/Warsaw');
      $currentTime = time();
      $validTime = $currentTime+(60*30);
      $token_entry->valid_to = date("Y-m-d H:i:s",$validTime);

      if($this->forgetTokens->save($token_entry)){
      $email = new Email('default');
            if($email->setTo($this->request->getData()['email'])
            ->setSubject("Password Reset")
            ->setTemplate('default')
            ->setSender('contact@whatssap.it','What\'s SAP')
            ->setLayout('forgetEmail')
            ->setEmailFormat('html')
            ->setViewVars(['token' => $token])
            ->send()){
      $this->Flash->success(__('Email was sent to your email address. Link is valid for 30 minutes.'));
      return $this->redirect($this->Auth->redirectUrl('/'));
        } else {
        $this->Flash->error(__("Something went wrong, and we couldn't send the email. Please try again."));
        return $this->redirect($this->Auth->redirectUrl('/'));
        }
      } else {
        $this->Flash->error(__("Something went wrong, and we couldn't send the email. Please try again."));
        return $this->redirect($this->Auth->redirectUrl('/'));
        }

      } else {
        $this->Flash->error(__('User with this email address was not found.'));
        return $this->redirect($this->Auth->redirectUrl('/'));
      }
    }
  }


///end of action

///reset password action

        public function passwordReset($token_hash)
    { 
      
      $this->loadModel('forgetTokens');
      $this->loadModel('Users');
      $token_entry = $this->forgetTokens->newEntity();
      date_default_timezone_set('Europe/Warsaw');
      if(!empty($this->forgetTokens->find('all', array(
        'conditions' => array('token_hash' => $token_hash, 
          'valid_to >=' => date("Y-m-d H:i:s",time()))))->first())) {

      } else {
        $this->Flash->error(__('Your password reset link is wrong, or not valid anymore.'));
        return $this->redirect($this->Auth->redirectUrl('/'));
      }

      if ($this->request->is('post')) {

        if($this->request->getData()['password'] == $this->request->getData()['password_confirm']) {
          if($this->checkPassword($this->request->getData()['password'])){

        $entry = $this->Users->find('all')->join([
        'tokens' => [
            'table' => 'forget_tokens',
            'type' => 'INNER',
            'conditions' => array('tokens.email = Users.email', 'token_hash' => $token_hash,
          'valid_to >=' => date("Y-m-d H:i:s",time()))
        ]
        ])->first();

        $update_table = TableRegistry::get('Users');
        $update_row = $update_table->get($entry->id);
        $update_row->password = $this->request->getData()['password'];              

        if($this->Users->save($update_row)) {
        $this->forgetTokens->deleteAll(array('forgetTokens.email' => $update_row->email)); 
        $this->Flash->success(__("Your password has been reset."));
        return $this->redirect($this->Auth->redirectUrl('/'));
        } else {
          $this->Flash->error(__("Something went wrong. Please try again."));
          return $this->redirect($this->request->getAttribute("here"));
        }
          } else {
            $this->Flash->error(__('Password need to be at least 8 characters long, contain one capital letter, number, and special character.'));
            return $this->redirect($this->request->getAttribute("here"));
          }
        } else {
        $this->Flash->error(__('Passwords need to be identical.'));
        return $this->redirect($this->request->getAttribute("here"));
          }
        }
      }

///end of reset password action

    ///contact email action

        public function contactEmail()
    {
      if ($this->request->is('post')) {

      $order   = array("\r\n", "\n", "\r");
      $replace = '<br />';
      $message = str_replace($order, $replace, $this->request->getData()['message']);

      $email = new Email('default');
            if($email->setTo("contact@whatssap.it")
            ->setSubject("New message from " . $this->request->getData()['name'])
            ->setSender('contact@whatssap.it','What\'s SAP')
            ->setTemplate('default')
            ->setLayout('usercontact')
            ->setEmailFormat('html')
            ->setViewVars(['message' => $message, 'name' => $this->request->getData()['name'], 'email' => $this->request->getData()['email']])
            ->send()){
      $this->Flash->success(__('Your email has been sent to our team. Thank you!'));
      if(!($this->request->getData()['redirect'] == 'display')) {
      return $this->redirect($this->Auth->redirectUrl('/users/' . $this->request->getData()['redirect']));
      } else {
        return $this->redirect($this->Auth->redirectUrl('/'));
      }
        } else {
          $this->Flash->success(__('Something went wront. Please try again.'));
          if(!($this->request->getData()['redirect'] == 'display')) {
          return $this->redirect($this->Auth->redirectUrl('/users/' . $this->request->getData()['redirect']));
          } else {
            return $this->redirect($this->Auth->redirectUrl('/'));
          }
        }

      }
    }


///end of action


///userpanel action

        public function userpanel()
    {
      
    }


///end of action

  
      ///time elapsed function
  function time_elapsed_string($datetime, $full = false) {
    $tz = 'Europe/Warsaw';
    $tz_obj = new \DateTimeZone($tz);
    $now = new \DateTime("now", $tz_obj);
    $ago = new \DateTime($datetime, $tz_obj);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

///end of time elapsed function



public function checkPassword($pwd) {
  if(!preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/',$pwd)) {
    return false;
  } else {
    return true;
  }
}

//end of controller
}
