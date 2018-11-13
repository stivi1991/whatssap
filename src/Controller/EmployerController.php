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
class EmployerController extends AppController
{


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function postjob()
    {
      $this->loadModel('jobOffer');
      $offer = $this->jobOffer->newEntity();
    if ($this->request->is('post')) {
      $offer = $this->jobOffer->patchEntity($offer, $this->request->getData());
      var_dump($this->request->getData());
        if ($this->jobOffer->save($offer)) {
          $this->Flash->success(__('Job offer has been saved.'));
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
                   //return $this->redirect($this->Auth->redirectUrl('/admin'));
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



//end of controller
}
