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

  
//////////ADD SELECTION DATA
  
public function maintainmodule(){
  $this->loadModel('Modules');
  $module = $this->Modules->newEntity();
    if ($this->request->is('post')) {
      $module = $this->Modules->patchEntity($module, $this->request->getData());
        if ($this->Modules->save($module)) {
            $this->Flash->success(__('The module has been saved.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The module could not be saved. Please, try again.'));
       }          
    }
}
  
public function maintaincountry(){
  $this->loadModel('Countries');
  $country = $this->Countries->newEntity();
    if ($this->request->is('post')) {
      $country = $this->Countries->patchEntity($country, $this->request->getData());
        if ($this->Countries->save($country)) {
            $this->Flash->success(__('The country has been saved.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The country could not be saved. Please, try again.'));
       }          
    }
}

public function maintainfunction(){
  $this->loadModel('Func');
  $func = $this->Func->newEntity();
    if ($this->request->is('post')) {
      $func = $this->Func->patchEntity($func, $this->request->getData());
        if ($this->Func->save($func)) {
            $this->Flash->success(__('The function has been saved.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The function could not be saved. Please, try again.'));
       }          
    }
}
  
public function maintainjobtype(){
  $this->loadModel('JobTypes');
  $type = $this->JobTypes->newEntity();
    if ($this->request->is('post')) {
      $type = $this->JobTypes->patchEntity($type, $this->request->getData());
        if ($this->JobTypes->save($type)) {
            $this->Flash->success(__('The type has been saved.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The type could not be saved. Please, try again.'));
       }          
    }
}
  
public function maintainlevel(){
  $this->loadModel('ExpLevels');
  $level = $this->ExpLevels->newEntity();
    if ($this->request->is('post')) {
      $level = $this->ExpLevels->patchEntity($level, $this->request->getData());
        if ($this->ExpLevels->save($level)) {
            $this->Flash->success(__('The level has been saved.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The level could not be saved. Please, try again.'));
       }          
    }
}
  
public function maintainoccupancy(){
  $this->loadModel('Occupancies');
  $occupancy = $this->Occupancies->newEntity();
    if ($this->request->is('post')) {
      $occupancye = $this->Occupancies->patchEntity($occupancy, $this->request->getData());
        if ($this->Occupancies->save($occupancy)) {
            $this->Flash->success(__('The occupancy has been saved.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The occupancy could not be saved. Please, try again.'));
       }          
    }
}
  
public function maintainsalcurr(){
  $this->loadModel('SalaryCurrs');
  $salcurr = $this->SalaryCurrs->newEntity();
    if ($this->request->is('post')) {
      $salcurr = $this->SalaryCurrs->patchEntity($salcurr, $this->request->getData());
        if ($this->SalaryCurrs->save($salcurr)) {
            $this->Flash->success(__('The currency has been saved.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The currency could not be saved. Please, try again.'));
       }          
    }
}  
  
public function maintainsalkind(){
  $this->loadModel('SalaryKinds');
  $salkind = $this->SalaryKinds->newEntity();
    if ($this->request->is('post')) {
      $salkind = $this->SalaryKinds->patchEntity($salkind, $this->request->getData());
        if ($this->SalaryKinds->save($salkind)) {
            $this->Flash->success(__('The salary kind has been saved.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The salary kind could not be saved. Please, try again.'));
       }          
    }
}  
  
public function maintainsalper(){
  $this->loadModel('SalaryPers');
  $salper = $this->SalaryPers->newEntity();
    if ($this->request->is('post')) {
      $salper = $this->SalaryPers->patchEntity($salper, $this->request->getData());
        if ($this->SalaryPers->save($salper)) {
            $this->Flash->success(__('The salary per has been saved.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The salary per could not be saved. Please, try again.'));
       }          
    }
}  
   
////////////////////////////////////////////////////////
  
  
  
//////////DELETE SELECTION DATA
  
public function deletemodule(){
  $this->loadModel('Modules');
    if ($this->request->is('post')) {
        $module = $this->Modules->get($this->request->getData()['id']);
        if ($this->Modules->delete($module)) {
            $this->Flash->success(__('The module has been deleted.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The module could not be deleted. Please, try again.'));
        }
    }
}
  
public function deletecountry(){
  $this->loadModel('Countries');
    if ($this->request->is('post')) {
        $country = $this->Countries->get($this->request->getData()['id']);
        if ($this->Countries->delete($country)) {
            $this->Flash->success(__('The country has been deleted.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The country could not be deleted. Please, try again.'));
        }
    }
}
     
public function deletefunction(){
  $this->loadModel('Func');
    if ($this->request->is('post')) {
        $func = $this->Func->get($this->request->getData()['id']);
        if ($this->Func->delete($func)) {
            $this->Flash->success(__('The function has been deleted.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The function could not be deleted. Please, try again.'));
        }
    }
}
   
public function deletejobtype(){
  $this->loadModel('JobTypes');
    if ($this->request->is('post')) {
        $type = $this->JobTypes->get($this->request->getData()['id']);
        if ($this->JobTypes->delete($type)) {
            $this->Flash->success(__('The job type has been deleted.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The job type could not be deleted. Please, try again.'));
        }
    }
}
   
public function deletelevel(){
  $this->loadModel('ExpLevels');
    if ($this->request->is('post')) {
        $level = $this->ExpLevels->get($this->request->getData()['id']);
        if ($this->ExpLevels->delete($level)) {
            $this->Flash->success(__('The experience level has been deleted.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The experience level could not be deleted. Please, try again.'));
        }
    }
}
   
public function deleteoccupancy(){
  $this->loadModel('Occupancies');
    if ($this->request->is('post')) {
        $occu = $this->Occupancies->get($this->request->getData()['id']);
        if ($this->Occupancies->delete($occu)) {
            $this->Flash->success(__('The occupancy has been deleted.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The occupancy could not be deleted. Please, try again.'));
        }
    }
}
   
public function deletesalcurr(){
  $this->loadModel('SalaryCurrs');
    if ($this->request->is('post')) {
        $curr = $this->SalaryCurrss->get($this->request->getData()['id']);
        if ($this->SalaryCurrs->delete($curr)) {
            $this->Flash->success(__('The currency has been deleted.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The currency could not be deleted. Please, try again.'));
        }
    }
}
   
public function deletesalkind(){
  $this->loadModel('SalaryKinds');
    if ($this->request->is('post')) {
        $kind = $this->SalaryKinds->get($this->request->getData()['id']);
        if ($this->SalaryKinds->delete($kind)) {
            $this->Flash->success(__('The salary kind has been deleted.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The salary kind could not be deleted. Please, try again.'));
        }
    }
}
  
public function deletesalper(){
  $this->loadModel('SalaryPers');
    if ($this->request->is('post')) {
        $per = $this->SalaryPers->get($this->request->getData()['id']);
        if ($this->SalaryPers->delete($per)) {
            $this->Flash->success(__('The salary per has been deleted.'));
          return $this->redirect($this->Auth->redirectUrl($this->request->getAttribute("here")));
        } else {
        $this->Flash->error(__('The salary per could not be deleted. Please, try again.'));
        }
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
  
$this->loadModel('jobOffer');
$joboffers = $this->jobOffer->find('all');
$this->set('joboffers', $joboffers);


}

public function logout(){
    $this->Auth->logout();
    $this->redirect('/');
}

}
