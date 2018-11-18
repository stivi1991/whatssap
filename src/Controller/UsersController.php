<?php
namespace App\Controller;

use App\Controller\AppController;

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
  $offer = $this->jobOffer->find('all');
  $query = $this->jobOffer->find('all');
  $this->set('offer', $offer);
}
///end of job search

//end of controller
}
