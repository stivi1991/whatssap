<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminController extends AppController
{

  var $name = 'Admin';
  var $helpers = array('Html', 'Form');
  var $scaffold;


public function initialize() {

  parent::initialize();

}


public function beforeFilter(Event $event)
{
    parent::beforeFilter($event);
    $this->loadModel('Users');

    $user = $this->Auth->user();
    if (isset($user['role']) && $user['role'] === 'ADMIN') {
        $this->Auth->allow('admin');
    } else {
      $this->Flash->error(__('Not authorized access.'));
      return $this->redirect('/');
    }
}


/**
 * Index method
 *
 * @return \Cake\Http\Response|void
 */
public function index()
{
  $this->loadModel('jobOffer');
    
  $users = $this->Users->find('all');
  $this->set(compact('users'));

  ///USERS
  $candidates = $this->Users->find('all', [
      'conditions' => ['Users.role LIKE' => 'CANDIDATE']
  ]);
  
  $employers_basic = $this->Users->find('all', [
    'conditions' => ['Users.role' => 'EMPL_BASIC']
  ]);
  
  $employers_standard = $this->Users->find('all', [
    'conditions' => ['Users.role' => 'EMPL_STANDARD']
  ]);
  
  $employers_premium = $this->Users->find('all', [
  'conditions' => ['Users.role' => 'EMPL_PREMIUM']
  ]);
  
  $candidates10 = $this->Users->find('all',[
    'limit'=>10,
    'conditions'=>array('Users.role LIKE' => 'CANDIDATE'),
    'order' => 'Users.created ASC', // <-- THIS
    'recursive' => -1,
  ]);
  
  ////////////////
  
  ///OFFERS
  date_default_timezone_set('Europe/Warsaw');
  
  $offers_all = $this->jobOffer->find('all');
    
  $offers_active = $this->jobOffer->find('all'
  , [
  'conditions' => ['valid_to >=' => date("Y-m-d H:i:s",time())]   ///CHANGE  THEN VALID DATE WILL BE ON OFFER
  ]
  );
  
  $offers_expired = $this->jobOffer->find('all'
  , [
  'conditions' => ['valid_to <' => date("Y-m-d H:i:s",time())]   ///CHANGE  THEN VALID DATE WILL BE ON OFFER
  ]
  );
  
  $offers10 = $this->jobOffer->find('all',[
    'limit'=>10,
    'order' => 'post_date DESC', // <-- THIS
    'recursive' => -1,
  ]);
  
  ////////////////  
  
  
  /////////USERS SETS
  $info = TableRegistry::get('PersonalInfo');
  $this->set('candidates', $candidates);
  $this->set('employers_basic', $employers_basic);
  $this->set('employers_standard', $employers_standard);
  $this->set('employers_premium', $employers_premium);
  $this->set('users', $users);
  $this->set('info', $info);
  $this->set('candidates10', $candidates10);
  /////////
  
  ////OFFERS SETS
  $this->set('offers_all', $offers_all);
  $this->set('offers_active', $offers_active);
  $this->set('offers_expired', $offers_expired);
  $this->set('offers10', $offers10);
  /////////
  
  
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
    $info = TableRegistry::get('PersonalInfo');
    $this->set('info', $info);

}

/**
 * Add method
 *
 * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
 */
public function add()
{
  $this->loadModel('HashedData');
  $pass = $this->HashedData->newEntity();
  $user = $this->Users->newEntity();
    if ($this->request->is('post')) {
        $user = $this->Users->patchEntity($user, $this->request->getData());
        $pass = $this->HashedData->patchEntity($pass, $this->request->getData());
        if ($this->Users->save($user) && $this->HashedData->save($pass)) {
            $this->Flash->success(__('The user has been saved.'));

          return $this->redirect($this->Auth->redirectUrl());  return $this->redirect(['action' => 'index']);
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

public function userlist() {

  $users = $this->Users->find('all');
  $this->set(compact('users'));
$info = TableRegistry::get('PersonalInfo');
$this->set('users', $users);
$this->set('info', $info);

}

  public function maintain(){

}

  
//////////EDIT SELECTION DATA
  
public function maintainmodule(){
  $this->loadModel('Modules');
  $module = $this->Modules->newEntity();
    if ($this->request->is('post')) {
        $module = $this->Modules->patchEntity($module, $this->request->getData());
        if ($this->Modules->save($module)) {
            $this->Flash->success(__('The module has been saved.'));
          return $this->redirect($this->Auth->redirectUrl('/admin/modulelist'));
        }
        $this->Flash->error(__('The module could not be saved. Please, try again.'));
    }
}
   
////////////////////////////////////////////////////////

  
////////////VIEW SELECTION DATA  

public function modulelist(){

$this->loadModel('Modules');
$module = $this->Modules->find('all');
$this->set('module', $module);

}

public function countrylist(){

$this->loadModel('Countries');
$countries = $this->Countries->find('all');
$this->set('countries', $countries);

}
  
public function functionlist(){

$this->loadModel('Func');
$func = $this->Func->find('all');
$this->set('func', $func);

}

public function levellist(){

$this->loadModel('ExpLevels');
$levels = $this->ExpLevels->find('all');
$this->set('levels', $levels);

}

public function jobtypelist(){

$this->loadModel('JobTypes');
$job_types = $this->JobTypes->find('all');
$this->set('job_types', $job_types);

}
  
public function occupancylist(){

$this->loadModel('Occupancies');
$occupancies = $this->Occupancies->find('all');
$this->set('occupancies', $occupancies);

}
  
public function salcurrlist(){

$this->loadModel('SalaryCurrs');
$sal_currs = $this->SalaryCurrs->find('all');
$this->set('sal_currs', $sal_currs);

}

public function salperlist(){

$this->loadModel('SalaryPers');
$sal_pers = $this->SalaryPers->find('all');
$this->set('sal_pers', $sal_pers);

}
  
public function salkindlist(){

$this->loadModel('SalaryKinds');
$sal_kinds = $this->SalaryKinds->find('all');
$this->set('sal_kinds', $sal_kinds);

}
  
///////////////////////////////////////////////////////////

public function offers(){

}

public function logout(){
    $this->Auth->logout();
    $this->redirect('/');
}

}
