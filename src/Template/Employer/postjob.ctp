<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>What's SAP
    </title>
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
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/./css/slider.css">
        <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/./css/scrolltop.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/./favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Preloader Start -->
    <div id="preloader">
      <div class="colorlib-load">
      </div>
    </div>
    <script src="/./js/preloader.js">
    </script>
    <?= $this->Flash->render() ?>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a href="/" class="navbar-brand">
            <img src="/./img/logo.png" alt="logo" class="d-none d-lg-block">
            <img src="/./img/logo-small.png" alt="logo" class="d-block d-lg-none">
            <span class="sr-only">Go to homepage
            </span>
          </a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu
            <i class="fa fa-bars">
            </i>
          </button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="/users/jobsearch" class="nav-link">Advanced Search
                  <span class="sr-only">(current)
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/about" class="nav-link">Who are we?
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/blog" class="nav-link">Blog
                </a>
              </li>
              <li class="nav-item dropdown">
                <a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">For Employers
                </a>
                <div aria-labelledby="pages" class="dropdown-menu">
                  <a href="#" data-toggle="modal" data-target="#login-modal-employer" class="dropdown-item">Login or Register
                  </a>
                  <a href="#pricing" class="dropdown-item">Pricing
                  </a>
                  <a href="/employer/postjob" class="dropdown-item">Post a job
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" data-toggle="modal" data-target="#login-modal" class="nav-link">Login
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="/employer/postjob" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0">Post a job
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- *** LOGIN MODAL CANDIDATE***-->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Candidate Login
            </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×
              </span>
            </button>
          </div>
          <div class="modal-body">
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create('User', array('url'=>array('controller'=>'users', 'action'=>'login'))); ?>
            <div class="form-group">
              <?= $this->Form->control('email' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Email','value'=>'')) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'password','placeholder'=>'Password','value'=>'')) ?>
            </div>
            <p class="text-center">
              <center>
                <?= $this->Form->submit(__('Login'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
            <p class="text-center text-muted">Not registered yet?
            </p>
            <p class="text-center text-muted">
              <a href="/users/register">
                <strong>Register now
                </strong>
              </a>!
            </p>
            <p class="text-center text-muted">
              <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#forget-modal">
                <strong>Forgot my password
                </strong>
              </a>!
            </p>
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
            <h4 id="exampleModalLabel" class="modal-title">Employer Login
            </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×
              </span>
            </button>
          </div>
          <div class="modal-body">
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create('Employer', array('url'=>array('controller'=>'employer', 'action'=>'login'))); ?>
            <div class="form-group">
              <?= $this->Form->control('email' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Email','value'=>'')) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'password','placeholder'=>'Password','value'=>'')) ?>
            </div>
            <p class="text-center">
              <center>
                <?= $this->Form->submit(__('Login'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
            <p class="text-center text-muted">Not registered yet?
            </p>
            <p class="text-center text-muted">
              <a href="/employer/register">
                <strong>Register now
                </strong>
              </a>!
            </p>
            <p class="text-center text-muted">
              <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#forget-modal">
                <strong>Forgot my password
                </strong>
              </a>!
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->

    <!-- *** FORGET PASSWORD MODAL***-->
    <div id="forget-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Password Reset
            </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×
              </span>
            </button>
          </div>
          <div class="modal-body">
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create('User', array('url'=>array('controller'=>'users', 'action'=>'forgetEmail'))); ?>
            <div class="form-group">
              <?= $this->Form->control('email' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Email','value'=>'', 'required'=>true)) ?>
            </div>
            <p class="text-center">
              <center>
                <?= $this->Form->submit(__('Send email'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** FORGET PASSWORD MODAL END ***-->

        <!-- *** EMAIL CONTACT ***-->
    <div id="contact-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Contact us
            </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×
              </span>
            </button>
          </div>
          <div class="modal-body">
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create('User', array('url'=>array('controller'=>'users', 'action'=>'contact_email'))); ?>
            <div class="form-group">
              <?= $this->Form->control('name' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Your name','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('email' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'email','placeholder'=>'Your email','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('message', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'textarea','placeholder'=>'Your message','value'=>'', 'required'=>true)) ?>
            </div>
            <p class="text-center">
              <center>
                <?= $this->Form->control('redirect', array('value' => strtolower($this->request->getParam('action')),'type'=>'hidden')) ?>
                <?= $this->Form->submit(__('Send'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** EMAIL CONTACT END ***-->

        <!-- *** TERMS MODAL ***-->
    <div id="terms-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Terms and conditions
            </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×
              </span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-center">
              <center>
                BĘDZIE JAK MARIKA ZROBI
              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** TERMS MODAL ***-->



    <section class="job-form-section job-form-section--image">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="job-form-box">
              <h2 class="heading">
                <span class="center-heading">ADD NEW 
                </span>
                <span class="accent">JOB OFFER
                </span>
                <span class="accent">
                </span>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Detailed information box !-->
<form method="post" action="/employer/postjob" class="job-add-form">
    <section>
      <div class="container">
        <div class="row">
          <div class="job-detail-description">
            General information
          </div>
        </div>
        <div class="col-lg-12 mx-auto">
            <div class="box box_title effect6">
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="job_title" class="thinfont labelclose smaller-font">Job title:
                  </label>
                  <input id="job_title" type="text" placeholder="JOB TITLE" name="job_title" class="form-control capitalfont" required />
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 form-group">
                  <label for="function" class="thinfont labelclose smaller-font">Function:
                  </label>
                  <select id="function" placeholder="FUNCTION" name="function" class="form-control select2" required>
                    <option disabled selected hidden>Function
                    </option>  
                    <option>Team Lead
                    </option>
                    <option>Developer
                    </option>
                    <option>Consultant
                    </option>
                    <option>Project Manager
                    </option>
                  </select>
                </div>
                <div class="col-lg-4 form-group">
                  <label for="module" class="thinfont labelclose smaller-font">Module:
                  </label>
                  <select id="module" name="module" class="form-control select2" required>
                    <option disabled selected hidden>SAP Module
                    </option>
                    <?php
foreach ($module as $module):
?>
                    <option>
                      <?= h($module->module_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
                <div class="col-xl-4 form-group">
                  <label for="exp_type" class="thinfont labelclose smaller-font">Level of expertise:
                  </label>
                  <select id="exp_type" placeholder="Level of expertise" name="exp_type" class="form-control select2 capitalfont" required>
                    <option disabled selected hidden>Level of expertise
                    </option>
                    <option>Junior
                    </option>
                    <option>Regular
                    </option>
                    <option>Senior
                    </option>
                    <option>Expert
                    </option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 form-group">
                  <label for="country" class="thinfont labelclose smaller-font">Country:
                  </label>
                  <select id="country" name="country" class="form-control select2" required>
                    <option disabled selected hidden>Country
                    </option>
                    <?php
foreach ($country as $country):
?>
                    <option>
                      <?= h($country->country_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
                <div class="col-lg-4 form-group">
                  <label for="city" class="thinfont labelclose smaller-font">City:
                  </label>
                  <input id="city" type="text" name="city" placeholder="City" class="form-control capitalfont" required />
                </div>
                <div class="col-xl-4 form-group">
                  <label for="job_type" class="thinfont labelclose smaller-font">Type of contract:
                  </label>
                  <select id="job_type" placeholder="type" name="job_type" class="form-control select2" required>
                    <option disabled selected hidden>Type of contract
                    </option>
                    <option>Permanent
                    </option>
                    <option>Freelance
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <!--  Detailed information box !-->
            <div class="row">
              <div class="job-detail-description">
                Detailed information
              </div>
            </div>
            <div class="box box_title effect7">
              <div class="row">
                <div class="col-xl-3 form-group">
                  <label for="salary_from" class="thinfont labelclose smaller-font">Salary from:
                  </label>
                  <input id="salary_from" type="text" name="salary_from" placeholder="Salary from" class="form-control capitalfont" required>
                </div>
                <div class="col-xl-3 form-group">
                  <label for="salary_to" class="thinfont labelclose smaller-font">Salary to:
                  </label>
                  <input id="salary_to" type="text" name="salary_to" placeholder="Salary to" class="form-control capitalfont" required>
                </div>
                <div class="col-xl-2 form-group">
                  <label for="currency" class="thinfont labelclose smaller-font">Currency:
                  </label>
                  <select id="currency" type="text" placeholder="Currency:" name="currency" class="form-control select2" required>
                    <option disabled selected hidden>Currency
                    </option>
                    <option>EUR
                    </option>
                    <option>PLN
                    </option>
                    <option>GBP
                    </option>
                  </select>
                </div>
                <div class="col-xl-2 form-group">
                  <label for="salary_type" class="thinfont labelclose smaller-font">Per:
                  </label>
                  <select id="salary_type" placeholder="Salary per:" name="salary_type" class="form-control select2" required>
                    <option disabled selected hidden>Per
                    </option>
                    <option>Hour
                    </option>
                    <option>Day
                    </option>
                    <option>Month
                    </option>
                    <option>Year
                    </option>
                  </select>
                </div>
                <div class="col-xl-2 form-group">
                  <label for="salary_kind" class="thinfont labelclose smaller-font">Kind:
                  </label>
                  <select id="salary_kind" placeholder="Kind" name="salary_kind" class="form-control select2" required>
                    <option disabled selected hidden>Kind
                    </option>
                    <option>Net
                    </option>
                    <option>Gross
                    </option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 form-group">
                  <label for="occupancy" class="thinfont labelclose smaller-font">Occupancy:
                  </label>
                  <select id="occupancy" data-placeholder="Mobility" name="occupancy" class="form-control select2" required>
                    <option disabled selected hidden>Occupancy
                    </option>
                    <option>Onsite
                    </option>
                    <option>Remote 20%
                    </option>
                    <option>Remote 40%
                    </option>
                    <option>Remote 60%
                    </option>
                    <option>Remote 80%
                    </option>
                    <option>Remote
                    </option>
                  </select>
                </div>
                <div class="col-xl-3 form-group">
                  <label for="project_start" class="thinfont labelclose smaller-font">Expected start date:
                  </label>
                  <input id="project_start" name="project_start" type="text" class="form-control" required />
                </div>
                <div class="col-xl-5 form-group">
                  <label for="duration" class="thinfont labelclose smaller-font">Expected duration (months):
                  </label>
                  <div class="range-slider">
                    <input id="duration" class="range-slider__range" name="duration" type="range" value="1" min="1" max="60">
                    <span class="range-slider__value">1
                    </span>
                  </div>
                </div>
              </div>
              <div class="row">
              </div>
            </div>
            <!--  Description box !-->
            <div class="row">
              <div class="job-detail-description">
                Description
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row">
                <div class="box box_title effect9">
                  <div class="form-group noborder">
                    <textarea id="description" name="description" rows="15" class="form-control noborder" required></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!--  Company info box !-->
            <div class="row">
              <div class="job-detail-description">
                Company information
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row">
                <div class="box box_title effect8">
                  <div class="row">
                    <div class="col-lg-6 form-group">
                      <label for="company_name" class="thinfont labelclose smaller-font">Company name:
                      </label>
                      <input id="company_name" name="company_name" type="text" class="form-control" required />
                    </div>
                    <div class="col-lg-6 form-group">
                      <label for="apply_email" class="thinfont labelclose  smaller-font">
                        <div class="row">
                        Applying email:<div class="question-mark">
                        <div class="tooltip">
                        <p>When a candidate applies for this offer, you will receive his request on this email address.</p>
                        </div><i class="fa fa-question"></i></div>
                    </div>
                      </label>
                      <input id="apply_email" name="apply_email" type="email" class="form-control" required />
                    </div>
                  </div>
                  <div class="row">
                    <p class="job-detail__social social social--outline">
                    <div class="col-lg-4 form-group">
                      <label for="company_url" class="thinfont labelclose smaller-font">Website 
                        <i class="fa fa-globe">
                        </i>
                      </label>
                      <div class="row">           
                        <input id="company_url" name="company_url" type="url" class="form-control" />
                      </div>
                    </div>
                    <div class="col-lg-4 form-group">
                      <label for="company_facebook" class="thinfont labelclose smaller-font">Facebook 
                        <i class="fa fa-facebook">
                        </i>
                      </label>
                      <input id="company_facebook" name="company_facebook" type="url" class="form-control" />
                    </div>
                    <div class="col-lg-4 form-group">
                      <label for="company_linkedin" class="thinfont labelclose smaller-font">LinkedIn 
                        <i class="fa fa-linkedin">
                        </i>
                      </label>
                      <input id="company_linkedin" name="company_linkedin" type="url" class="form-control" />
                    </div>
                    </p>
                </div>
              </div>
            </div>
            </div>
          <!--  Agree and submit !-->
          <div class="row">
            <div class="col-lg-12">
              <hr>
              <div class="checkbox text-center">
                <div class="job-detail-description">
                  <input type="checkbox" required /> I agree with the 
                  <a href="#">Terms and conditions
                  </a>.
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 text-center">
              <hr>
              <a href="" data-toggle="modal" data-target="#payment-modal"><button class="btn navbar-btn btn-outline-light mb-5 mb-lg-0">POST IT
              </button></a>
            </div>
          </div>
      </div>
      </div>
    </section>

            <!-- *** PAYMENT INFO MODAL***-->
    <div id="payment-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Payment details
            </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×
              </span>
            </button>
          </div>
          <div class="modal-body">
            <?= $this->Form->control('service' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text', 'value'=>'Single Job Offer Post', 'required'=>true, 'hidden'=>'true')) ?>
            <p align="left">SINGLE JOB OFFER POST</p>
            <?= $this->Form->control('amount' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text', 'value'=>'199.99', 'required'=>true, 'hidden'=>'true')) ?>
            <p align="left">199.99$ NET</p>
            <p align="left">Company Invoicing Information</p>
            <div class="form-group">
              <?= $this->Form->control('company_tax' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Tax Number','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('company_country' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Country','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('company_city' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'City','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('company_street' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Street/apartment','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('postal_code' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Postal code','value'=>'', 'required'=>true)) ?>
            </div>
            <p class="text-center">
              <center>
                <?= $this->Form->submit(__('Go to payment'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** PAYMENT INFO MODAL END ***-->


  <!--  Pricing section !-->            
  <section id="pricing">
    <div class="container">
      <h3 class="heading">Our Offer
      </h3>
      <p class="lead text-center mb-5">
      </p>
      <div class="row packages">
        <!--single -->
        <div class="col-md-4">
          <div class="package ">
            <div class="package-header">
              <h5>Single Post
              </h5>
              <div class="meta-text">
              </div>
            </div>
            <div class="price">
              <div class="price-container">
                <h4>
                  <span class="currency">$
                  </span>5
                </h4>
              </div>
            </div>
            <ul>
              <li>
                <i class="fa fa-check">
                </i>Post single job offer
              </li>
              <li>&nbsp;
              </li>
            </ul>
            <a href="#" class="btn btn-outline-white-primary">Post
            </a>
          </div>
        </div>
        <!--standard package -->
        <div class="col-md-4">
          <div class="package ">
            <div class="package-header-middle">
              <h5>Standard
              </h5>
              <div class="meta-text">
              </div>
            </div>
            <div class="price">
              <div class="price-container">
                <h4>
                  <span class="currency">$
                  </span>49
                </h4>
                <span class="period">/ month
                </span>
              </div>
            </div>
            <ul>
              <li>
                <i class="fa fa-check">
                </i>Access to candidate database
              </li>
              <li>
                <i class="fa fa-check">
                </i>Post 10 job offers a month
              </li>
            </ul>
            <a href="#" class="btn btn-outline-white-primary">Buy
            </a>
          </div>
        </div>
        <!-- premium package -->
        <div class="col-lg-4">
          <div class="package best-value">
            <div class="package-header">
              <h5>Premium
              </h5>
            </div>
            <div class="price">
              <div class="price-container">
                <h4>
                  <span class="currency">$
                  </span>199
                </h4>
                <span class="period">/ month
                </span>
              </div>
            </div>
            <ul>
              <li>
                <i class="fa fa-check">
                </i>Access to candidate database
              </li>
              <li>
                <i class="fa fa-check">
                </i>Post 100 job offers a month
              </li>
            </ul>
            <a href="#" class="btn btn-primary">Buy
            </a>
          </div>
        </div>
        <!-- end col-->
      </div>
    </div>
  </section>
  <!--  Footer !-->
<footer class="footer">
  <hr>
  <div class="footer__copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-2 text-md-left text-center">
          <p>&copy;2018 What's SAP
          </p>
        </div>
        <div class="col-md-8 text-center" align="center">
          <a href="#" data-toggle="modal" data-target="#contact-modal" class="credit" style="color:black;">CONTACT</a> | 
          <a href="#" data-toggle="modal" data-target="#terms-modal" class="credit" style="color:black;">TERMS AND CONDITIONS</a> | 
          <a href="/users/about/" class="credit" style="color:black;">WHO ARE WE</a>
      </div>
        <div class="col-md-2 text-md-right text-center">
          <p class="credit">Amity Consulting
        </p>
    </div>
  </div>
  </div>
</div>
</footer>
<!-- JavaScript files-->
<script src="/./vendor/jquery/jquery.min.js">
</script>
<script src="/./vendor/popper.js/umd/popper.min.js">
</script>
<script src="/./vendor/bootstrap/js/bootstrap.min.js">
</script>
<script src="/./vendor/jquery.cookie/jquery.cookie.js">
</script>
<script src="/./vendor/owl.carousel/owl.carousel.min.js">
</script>
<script src="/./vendor/bootstrap-select/js/bootstrap-select.min.js">
</script>
<script src="/./js/front.js">
</script>
<script src="/./js/slider.js">
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
 $(document).ready(function () {
 $( "#project_start" ).datepicker({ dateFormat: 'yy-mm-dd' });
 });
</script>
<script src="/./js/scrolltop.js">
</script>
<a href="#" id="scroll" class="nostyle" style="display: none;">
  <span>
</body>
</html>