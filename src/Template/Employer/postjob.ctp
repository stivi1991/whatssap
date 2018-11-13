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
    <link href="../css/preloader.css" rel="stylesheet">
    <script src="../js/preloader.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto for copy, Montserrat for headings-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="../css/select2.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.ico">




  </head>
  <body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="/" class="navbar-brand"><img src="/./img/logo.png" alt="logo" class="d-none d-lg-block"><img src="./img/logo-small.png" alt="logo" class="d-block d-lg-none"><span class="sr-only">Go to homepage</span></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="category.html" class="nav-link">Job offers<span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a href="about.html" class="nav-link">Who are we?</a></li>
              <li class="nav-item dropdown"><a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">For Employers</a>
                <div aria-labelledby="pages" class="dropdown-menu"><a href="#" data-toggle="modal" data-target="#login-modal-employer" class="dropdown-item">Login or Register</a><a href="#pricing" class="dropdown-item">Pricing</a><a href="/employer/postjob" class="dropdown-item">Post a job</a></div>
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
            <p class="text-center text-muted"><a href="client-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
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
            <p class="text-center text-muted"><a href="#"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->









    <section class="bg-light-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="client-dashboard.html">Dashboard</a></li>
                <li aria-current="page" class="breadcrumb-item active">Add a new position</li>
              </ul>
            </nav>
            <h1 class="heading">Add a new position</h1>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <form id="job-main-form" method="get" action="#" class="job-add-form">
              <div class="row">
                <div class="col-lg-12">
                  <h4>Job details</h4>
                  <p class="text-muted text-small">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.     </p>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="title">Job Title</label>
                  <input id="title" type="text" class="form-control">
                  <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="text">Job Description</label>
                  <textarea id="text" rows="5" class="form-control"></textarea>
                  <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 form-group">
                  <label for="location">Location</label>
                  <input id="location" type="text" placeholder="e.g. Rio de Janeiro" class="form-control">
                </div>
                <div class="col-lg-6 form-group">
                  <label for="type">Type</label>
                  <select id="type" placeholder="Choose job type" class="form-control select2">
                    <option>Full-time</option>
                    <option>Part-time</option>
                    <option>Internship</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="category">Category</label>
                  <select id="category" multiple="multiple" placeholder="Choose category" class="form-control select2">
                    <option>Web design  </option>
                    <option>Human Resources</option>
                    <option>Support</option>
                    <option>Logistics</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="tag">Tags</label>
                  <select id="tag" multiple placeholder="Choose tags" class="form-control select2">
                    <option>HTML</option>
                    <option>CSS</option>
                    <option>Ruby on Rails</option>
                    <option>PHP</option>
                    <option>Python</option>
                    <option>React</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 form-group">
                  <label for="post_type">Type of the post</label>
                  <select id="post_type" data-placeholder="Choose type of the post" class="form-control select2">
                    <option>Featured ($100) </option>
                    <option>Standard ($30)</option>
                  </select>
                </div>
                <div class="col-xl-4 form-group">
                  <label for="apply_url">Apply URL <span class="note">(users will apply on your website)</span></label>
                  <input id="apply_url" type="url" class="form-control">
                </div>
                <div class="col-xl-4 form-group">
                  <label for="validity">Validity of the post</label>
                  <input id="validity" type="date" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <hr class="margin-bottom--big">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <h4>Company details</h4>
                  <p class="text-muted text-small">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.     </p>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="company_name">Company name</label>
                  <input id="company_name" type="text" class="form-control">
                  <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="company_description">Company Description</label>
                  <textarea id="company_description" rows="3" class="form-control"></textarea>
                  <p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 form-group">
                  <label for="company_website">Website</label>
                  <input id="company_website" type="url" class="form-control">
                </div>
                <div class="col-lg-4 form-group">
                  <label for="company_logo">Logo</label>
                  <input id="company_logo" type="file" class="form-control">
                </div>
                <div class="col-lg-4 form-group">
                  <label for="company_twitter">Twitter</label>
                  <input id="company_twitter" placeholder="@getbootstrap" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <hr>
                  <div class="checkbox text-center">
                    <label>
                      <input type="checkbox"> I agree with the <a href="#">Terms and conditions</a>.
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 text-center">
                  <hr>
                  <button type="submit" class="btn btn-outline-white-primary"> <i class="fa fa-magic"></i> Save and publish</button>
                  <button type="submit" class="btn btn-outline-white-secondary"> <i class="fa fa-save"></i> Save draft</button>
                </div>
              </div>
            </form>
          </div>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../js/select2.js"></script>
    <script src="../js/front.js"></script>

  </body>
</html>
