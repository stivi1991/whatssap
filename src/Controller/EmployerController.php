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

      $this->loadModel('Modules');
      $module = $this->Modules->find('all');
      $this->set('module', $module);

      $this->loadModel('Countries');
      $country = $this->Countries->find('all');
      $this->set('country', $country);

      $this->loadModel('jobOffer');
      $offer = $this->jobOffer->newEntity();

    if ($this->request->is('post')) {
      $offer = $this->jobOffer->patchEntity($offer, $this->request->getData());
      date_default_timezone_set('Europe/Warsaw');
      $offer->post_date = date("Y-m-d H:i:s",time());
      $offer->change_date = date("Y-m-d H:i:s",time());
      $order   = array("\r\n", "\n", "\r");
      $replace = '<br />';
      $offer->description = str_replace($order, $replace, $offer->description);


      $location_data_name = strtolower(str_replace('Ś','s',(str_replace('ś','s',(str_replace('Ą','a',(str_replace('Ó','o',(str_replace('Ć','c',(str_replace('Ę','e',(str_replace('Ł','l',(str_replace('Ź','z',(str_replace('Ż','z',(str_replace('Ń','n',(str_replace('-','',str_replace(';','',str_replace(',','',str_replace('.', '',str_replace(' ','',str_replace('ł','l',
      str_replace('ę','e',str_replace('ą','a',str_replace('ź','z',str_replace('ż','z',str_replace('ó','o',str_replace('ń','n', $offer->city)))))))))))))))))))))))))))))))));
      $offer->location_data_name = $location_data_name;
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
                   return $this->redirect($this->Auth->redirectUrl('/admin'));
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
