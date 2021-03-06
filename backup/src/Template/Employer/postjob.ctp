<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

?>



<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>What's SAP</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <!--preloader-->
      <link href="/./css/preloader.css" rel="stylesheet">
      <!-- Bootstrap CSS-->
      <link rel="stylesheet" href="/./vendor/bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome CSS-->
      <link rel="stylesheet" href="/./vendor/font-awesome/css/font-awesome.min.css">
      <!-- Google fonts - Roboto for copy, Montserrat for headings-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
      <!-- Bootstrap Select-->
      <link rel="stylesheet" href="/./vendor/bootstrap-select/css/bootstrap-select.min.css">
      <!-- owl carousel-->
      <link rel="stylesheet" href="/./vendor/owl.carousel/assets/owl.carousel.css">
      <link rel="stylesheet" href="/./vendor/owl.carousel/assets/owl.theme.default.css">
      <!-- theme stylesheet-->
      <link rel="stylesheet" href="/./css/style.default.css" id="theme-stylesheet">
      <!-- Custom stylesheet - for your changes-->
      <link rel="stylesheet" href="/./css/custom.css">
      <!-- Favicon-->
      <link rel="shortcut icon" href="/./favicon.png">
      <!-- Tweaks for older IEs--><!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <body>
      <!-- Preloader Start -->
      <div id="preloader">
         <div class="colorlib-load"></div>
      </div>
      <script src="/./js/preloader.js"></script>
      <?= $this->Flash->render() ?>
      <!-- navbar-->
      <header class="header">
         <nav class="navbar navbar-expand-lg">
            <div class="container">
               <a href="/" class="navbar-brand"><img src="/./img/logo.png" alt="logo" class="d-none d-lg-block"><img src="./img/logo-small.png" alt="logo" class="d-block d-lg-none"><span class="sr-only">Go to homepage</span></a>
               <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars"></i></button>
               <div id="navbarSupportedContent" class="collapse navbar-collapse">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item"><a href="/users/jobsearch" class="nav-link">Job offers<span class="sr-only">(current)</span></a></li>
                     <li class="nav-item"><a href="/users/about" class="nav-link">Who are we?</a></li>
                     <li class="nav-item dropdown">
                        <a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">For Employers</a>
                        <div aria-labelledby="pages" class="dropdown-menu"><a href="#" data-toggle="modal" data-target="#login-modal-employer" class="dropdown-item">Login or Register</a><a href="/#pricing" class="dropdown-item">Pricing</a><a href="/employer/postjob" class="dropdown-item">Post a job</a></div>
                     </li>
                     <li class="nav-item"><a href="#" data-toggle="modal" data-target="#login-modal" class="nav-link">Login</a></li>
                     <li class="nav-item dropdown"><a href="/employer/postjob" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0">Post a job</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <!-- *** LOGIN MODAL CANDIDATE***_________________________________________________________
         -->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
         <div role="document" class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 id="exampleModalLabel" class="modal-title">Candidate Login</h4>
                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <?= $this->Flash->render('auth'); ?>
                  <?= $this->Form->create('User', array('url'=>array('controller'=>'users', 'action'=>'login'))); ?>
                  <div class="form-group">
                     <?= $this->Form->control('email' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Email','value'=>'')) ?>
                  </div>
                  <div class="form-group">
                     <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Password','value'=>'')) ?>
                  </div>
                  <p class="text-center">
                  <center>
                     <?= $this->Form->submit(__('Login'), array('class' => 'btn btn-outline-white-primary')); ?>
                     <?= $this->Form->end() ?>
                  </center>
                  </p>
                  <p class="text-center text-muted">Not registered yet?</p>
                  <p class="text-center text-muted"><a href="client-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
               </div>
            </div>
         </div>
      </div>
      <!-- *** LOGIN MODAL END ***-->
      <!-- *** LOGIN MODAL EMPLOYER***_________________________________________________________
         -->
      <div id="login-modal-employer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
         <div role="document" class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 id="exampleModalLabel" class="modal-title">Employer Login</h4>
                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <?= $this->Flash->render('auth'); ?>
                  <?= $this->Form->create('Employer', array('url'=>array('controller'=>'employer', 'action'=>'login'))); ?>
                  <div class="form-group">
                     <?= $this->Form->control('email' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Email','value'=>'')) ?>
                  </div>
                  <div class="form-group">
                     <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Password','value'=>'')) ?>
                  </div>
                  <p class="text-center">
                  <center>
                     <?= $this->Form->submit(__('Login'), array('class' => 'btn btn-outline-white-primary')); ?>
                     <?= $this->Form->end() ?>
                  </center>
                  </p>
                  <p class="text-center text-muted">Not registered yet?</p>
                  <p class="text-center text-muted"><a href="#"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
               </div>
            </div>
         </div>
      </div>
      <!-- *** LOGIN MODAL END ***-->
      <section class="job-form-section job-form-section--image">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 mx-auto">
                  <div class="job-form-box">
                     <h2 class="heading"><span class="center-heading">ADD NEW </span><span class="accent">JOB OFFER</span><span class="accent"></span></h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="row">
               <div class="col-lg-12 mx-auto">
                  <form method="post" action="/employer/postjob" class="job-add-form">
                     <div class="row">
                        <div class="col-lg-12 form-group">
                           <label for="title">Job Title:</label>
                           <input id="job_title" type="text" name="job_title" class="form-control" required />
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 form-group">
                           <label for="module">Module:</label>
                           <select id="module" name="module" class="form-control select2" required >
                              <option disabled selected hidden>SAP Module</option>
                              <?php foreach ($module as $module): ?>
                              <option><?= h($module->module_desc) ?></option>
                              <?php endforeach;?>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12 form-group">
                           <label for="text">Job Description:</label>
                           <textarea id="description" name="description" rows="5" class="form-control" required /></textarea>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 form-group">
                           <label for="country">Country:</label>
                           <input id="country" type="text" name="country" placeholder="Country" class="form-control" required />
                        </div>
                        <div class="col-lg-4 form-group">
                           <label for="city">City:</label>
                           <input id="city" type="text" name="city" placeholder="City" class="form-control" required />
                        </div>
                        <div class="col-lg-4 form-group">
                           <label for="job_type">Type:</label>
                           <select id="job_type" placeholder="Choose job type" name="job_type" class="form-control select2" required >
                              <option disabled selected hidden>Type</option>
                              <option>Permanent</option>
                              <option>Freelance</option>
                           </select>
                        </div>
                     </div>
            <div class="row">
            <div class="col-xl-2 form-group">
            <label for="salary">Salary:</label>
            <input id="salary" type="text" name="salary" placeholder="Salary" class="form-control" required >
            </div>
            <div class="col-xl-2 form-group">
            <label for="currency">Currency:</label>
            <select id="currency" type="text" placeholder="Currency:" name="currency" class="form-control select2" required >
                  <option disabled selected hidden>Currency</option>
                  <option>EUR</option>
                  <option>PLN</option>
                  <option>GBP</option>
               </select>
            </div>
            <div class="col-xl-2 form-group">
            <label for="salary_type">Salary per:</label>
            <select id="salary_type" placeholder="Salary per:" name="salary_type" class="form-control select2" required >
            <option disabled selected hidden>Per</option>
            <option>Hour</option>
            <option>Day</option>
            <option>Month</option>
            </select>
            </div>
            <div class="col-xl-3 form-group">
            <label for="project_start">Start date:</label>
            <input id="project_start" name="project_start" type="date" class="form-control" required />
            </div>
            <div class="col-xl-3 form-group">
            <label for="project_end">End date:</label>
            <input id="project_end" name="project_end" type="date" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="col-xl-4 form-group">
            <label for="function">Function:</label>
            <select id="function" data-placeholder="Function" name="function" class="form-control select2" required >
            <option disabled selected hidden>Function</option>  
            <option>Team Lead</option>
            <option>Developer</option>
            <option>Consultant</option>
            <option>Project Manager</option>
            </select>
            </div>
            <div class="col-xl-4 form-group">
              <label for="exp_type">Level of expertise:</label>
              <select id="exp_type" data-placeholder="Level of expertise" name="exp_type" class="form-control select2" required >
                <option disabled selected hidden>Level of expertise</option>
                <option>Junior</option>
                <option>Regular</option>
                <option>Senior</option>
                <option>Expert</option>
              </select>
            </div>
            <div class="col-xl-4 form-group">
              <label for="occupancy">Mobility:</label>
              <select id="occupancy" data-placeholder="Mobility" name="occupancy" class="form-control select2" required >
                <option disabled selected hidden>Mobility</option>
                <option>Onsite</option>
                <option>Remote 20%</option>
                <option>Remote 40%</option>
                <option>Remote 60%</option>
                <option>Remote 80%</option>
                <option>Remote</option>
              </select>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-6 form-group">
            <label for="company_name">Company name</label>
            <input id="company_name" name="company_name" type="text" class="form-control" required />
            </div>
            <div class="col-lg-6 form-group">
            <label for="company_url">Company website</label>
            <input id="company_url" name="company_url" type="text" class="form-control" required />
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
            <hr>
            <div class="checkbox text-center">
            <label>
            <input type="checkbox" required /> I agree with the <a href="#">Terms and conditions</a>.
            </label>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-12 text-center">
            <hr>
            <button type="submit" class="btn btn-outline-white-primary"> <i class="fa fa-magic"></i> Save and publish</button>
            </div>
            </div>
            </form>
         </div>
      </section>

    <section id ="pricing">
      <div class="container">
        <h3 class="heading">Our Offer</h3>
        <p class="lead text-center mb-5">
        </p>

        <div class="row packages">
          <!--single -->
          <div class="col-md-4">
            <div class="package ">
              <div class="package-header">
                <h5>Single Post</h5>
                  <div class="meta-text"></div>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>5</h4>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>Post single job offer</li>
                <li>&nbsp;</li>
              </ul><a href="#" class="btn btn-outline-white-primary">Post</a>
            </div>
          </div>
          <!--standard package -->
          <div class="col-md-4">
            <div class="package ">
              <div class="package-header-middle">
                <h5>Standard</h5>
                  <div class="meta-text"></div>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>49</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>Access to candidate database</li>
                <li><i class="fa fa-check"></i>Post 10 job offers a month</li>
              </ul><a href="#" class="btn btn-outline-white-primary">Buy</a>
            </div>
          </div>

          <!-- premium package -->
          <div class="col-lg-4">
            <div class="package best-value">
              <div class="package-header">
                <h5>Premium</h5>
              </div>
              <div class="price">
                <div class="price-container">
                  <h4><span class="currency">$</span>199</h4><span class="period">/ month</span>
                </div>
              </div>
              <ul>
                <li><i class="fa fa-check"></i>Access to candidate database</li>
                <li><i class="fa fa-check"></i>Post 100 job offers a month</li>
              </ul><a href="#" class="btn btn-primary">Buy</a>
            </div>
          </div>
          <!-- end col-->
        </div>
      </div>
    </section>


      
      <footer class="footer">
         <div class="footer__copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 text-md-left text-center">
                     <p>&copy;2018 What's SAP</p>
                  </div>
                  <div class="col-md-6 text-md-right text-center">
                     <p class="credit">Amity Consulting</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>


      <!-- JavaScript files-->
      <script src="/./vendor/jquery/jquery.min.js"></script>
      <script src="/./vendor/popper.js/umd/popper.min.js"> </script>
      <script src="/./vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="/./vendor/jquery.cookie/jquery.cookie.js"> </script>
      <script src="/./vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="/./vendor/bootstrap-select/js/bootstrap-select.min.js">   </script>
      <script src="/./js/front.js"></script>

   </body>
</html>
