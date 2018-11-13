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
    $this->loadModel('PersonalInfo');

    $user = $this->Auth->user();
    if (isset($user['_matchingData']['Users']['role']) && $user['_matchingData']['Users']['role'] === 'ADMIN') {
        $this->Auth->allow('admin');
    } else {
      var_dump($user);
      return $this->redirect('/users/userpanel');
      $this->Flash->error(__('Brak dostępu.'));
    }
}


/**
 * Index method
 *
 * @return \Cake\Http\Response|void
 */
public function index()
{
    $users = $this->Users->find('all');
    $this->set(compact('users'));
    $verified = $this->Users->find('all', [
      'conditions' => ['Users.role LIKE' => '%CUST_VERIFIED%']
  ]);
    $nverified = $this->Users->find('all', [
    'conditions' => ['Users.role LIKE' => '%CUST_NOT_VERIFIED%']
  ]);
  $nverified10 = $this->Users->find('all',array(
    'limit'=>10,
    'conditions'=>array('Users.role LIKE' => '%CUST_NOT_VERIFIED%'),
    'order' => 'Users.created ASC', // <-- THIS
    'recursive' => -1,
));
  $info = TableRegistry::get('PersonalInfo');
  $this->set('verified', $verified);
  $this->set('users', $users);
  $this->set('info', $info);
  $this->set('nverified', $nverified);
  $this->set('nverified10', $nverified10);

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

  public function transactions(){

}

public function logout(){
    $this->Auth->logout();
    $this->redirect('/');
}

}
