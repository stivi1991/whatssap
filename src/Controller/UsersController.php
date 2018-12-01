<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Filesystem\Folder;
use Cake\Mailer\Email;

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
                   return $this->redirect($this->Auth->redirectUrl('/admin/'));
                } else {
                  $this->Flash->succes(__('You are logged in.'));
                   return $this->redirect($this->Auth->redirectUrl('/'));
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


////// register action
public function register() {

  $uid = $this->Auth->user()['id'];
  if($uid) {
  $this->Flash->error(__('You are already logged in.'));
  return $this->redirect($this->Auth->redirectUrl('/users/userpanel'));
  }

  $entity = $this->Users->newEntity();
  if ($this->request->is('post')) {
  $entity = $this->Users->patchEntity($entity, $this->request->getData());

    if (!empty($this->request->getData('email')) &&
      !empty($this->request->getData('password')) &&
      !empty($this->request->getData('password_confirm')) &&
      !empty($this->request->getData('name_first')) &&
      !empty($this->request->getData('name_last')))
      {
        if($this->request->getData(['password']) == $this->request->getData(['password_confirm']))
        {
          if(!$entity->getErrors())
          {


      //check if save operations success
      if($this->Users->save($entity)){

        var_dump($this->request->getData());


      $this->Flash->success(__('Registration complete. Please validate your account by opening a link in the email sent to provided address.'));
      //return $this->redirect($this->Auth->redirectUrl('/users/login'));
    } else {
      $this->Flash->error(__('Account with given email address already exists. You can log in.'));
      return $this->redirect($this->Auth->redirectUrl('/users/login'));
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


///job search action
public function jobsearch() {
  $this->loadModel('jobOffer');
  $offer = $this->jobOffer->find('all', array('order'=>'job_title'));
  $this->set('offer', $offer);

  $module = TableRegistry::get('Modules');
  $this->set('module', $module);

  $dist_locations = $this->jobOffer->find('all', array(
    'fields'=>['city','location_data_name', 'module'],
    'order'=>'city ASC',
    'group' => ['city, location_data_name', 'module']));

  $this->set('dist_locations', $dist_locations);

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
          } else {
            $this->Flash->error(__('You have already applied for this offer.'));
            return $this->redirect($this->Auth->redirectUrl('/users/jobdetails/' . $offer_id));
          }

          $file_target = ROOT . DS . $uploadDir . $this->request->getData()['candidate_cv']['name'];
          $apply->cv_url = $file_target;
          date_default_timezone_set('Europe/Warsaw');
          $apply->apply_timestamp = date("Y-m-d H:i:s",time());

          //file upload
          $cv_tmp = $this->request->getData()['candidate_cv']['tmp_name'];
            move_uploaded_file($cv_tmp, $file_target);
            $email = new Email('default');
            if($email->setTo($apply_email)
            ->setSubject("📄 New application " . strtoupper($job_title))
            ->setEmailFormat('html')
            ->setTemplate('default','default')
            ->setViewVars(['offer_id' => $offer_id,'job_title' => $job_title,'city' => $city,'country' => $country,'company_name' => $company_name])
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

//end of controller
}
