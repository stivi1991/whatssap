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
            ->setViewVars(['offer_id' => $offer_id,'job_title' => $job_title, 'candidate_email' => $this->request->getData()['candidate_email']])
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
