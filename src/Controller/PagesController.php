<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {

      $this->loadModel('jobOffer');
      $offer = $this->jobOffer->find('all', array('order'=>'job_title'));
      $this->set('offer', $offer);

      foreach($offer as $offer_row){

        $offer_row->{"elapsed"} = $this->time_elapsed_string($offer_row->post_date);

      }


      $module = TableRegistry::get('Modules');
      $this->set('module', $module);

      $dist_locations = $this->jobOffer->find('all', array(
        'fields'=>['city','location_data_name'],
        'order'=>'city ASC',
        'group' => ['city, location_data_name']));

      $this->set('dist_locations', $dist_locations);

      $this->loadModel('Modules');
      $dist_modules = $this->Modules->find('all', [
        'fields'=>['module_desc','module_data_name'],
        'order'=>'module_desc ASC',
        'group' => ['module_desc, module_data_name']]);

      $this->set('dist_modules', $dist_modules);

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    //// loginAction

    public function login()
        {
          var_dump($this->Auth->user());
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
                $this->Flash->error(__('Unvalid email or password. Please try again.'));
            }
        }
    /// end of login action
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

}
