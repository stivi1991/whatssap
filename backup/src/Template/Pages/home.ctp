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
    <link href="css/preloader.css" rel="stylesheet">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto for copy, Montserrat for headings-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/tablefilters.css">
        <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/./css/scrolltop.css">

    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>
    <!-- Preloader Start -->
    <script src="/./vendor/jquery/jquery.min.js"></script>

    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <script src="../js/preloader.js"></script>

    <?= $this->Flash->render() ?>


    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="/" class="navbar-brand"><img src="/img/logo.png" alt="logo" class="d-none d-lg-block"><img src="img/logo-small.png" alt="logo" class="d-block d-lg-none"><span class="sr-only">Go to homepage</span></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/users/jobsearch" class="nav-link">Job offers<span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a href="/users/about" class="nav-link">Who are we?</a></li>
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
                <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'password','placeholder'=>'Password','value'=>'')) ?>
              </div>
              <p class="text-center">
                <center>
                <?= $this->Form->submit(__('Login'), array('class' => 'btn btn-outline-white-primary')); ?>
                <?= $this->Form->end() ?>
              </center>
              </p>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="/users/register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
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
                <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'password','placeholder'=>'Password','value'=>'')) ?>
              </div>
              <p class="text-center">
                <center>
                <?= $this->Form->submit(__('Login'), array('class' => 'btn btn-outline-white-primary')); ?>
                <?= $this->Form->end() ?>
              </center>
              </p>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="/employer/register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
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
              <h2 class="heading"><span class="center-heading">FIND YOUR NEXT </span><span class="accent">PROJECT</span><span class="accent"></span></h2>
              <form id="job-main-form" method="get" action="#" class="job-main-form">
                <div class="controls">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="row">
                        <label for="profession" class='main-center-text'><b>Location:</b></label>
                      </div>
                        <?php foreach ($dist_locations as $offer_row): ?>
                         <tr>
                           <input type="checkbox" id=<?= $offer_row->location_data_name ?> autocomplete="off" hidden></input>
                           <button type="button" class="btn btn-info btn-sm btn-space btn-filter-location" data-target-location=<?= $offer_row->location_data_name ?>><?= $offer_row->city ?></button>
                         </tr>
                        <?php endforeach;?>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="row">
                        <label for="location" class='main-center-text'><b>Module:</b></label>
                      </div>
                        <?php foreach ($dist_modules as $offer_row): ?>
                         <tr>
                           <input type="checkbox" id=<?= $offer_row->module_data_name ?> autocomplete="off" hidden></input>
                           <button type="button" class="btn btn-info btn-sm btn-space btn-filter-module" data-target-module=<?= $offer_row->module_data_name; ?>><?= $offer_row->module_desc ?></button>
                         </tr>
                        <?php endforeach;?>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <h3 class="heading" id="jobcounter">We have <span class="accent"><?= $offer->count(); ?> </span> active offers</h3>
  							<table id="offertable" class="table table-bordered table-sm table-filter" cellspacing="0" width="100%">
                  <thead style='display:none;'>
                    <tr>
                      <th>Offer</th>
                    </tr>
                  </thead>
  								<tbody>
                    <?php foreach ($offer as $offer_row): ?>
                     <tr data-location="<?= $offer_row->location_data_name ?>" data-module="<?= $module->find()->where(['module_desc' => $offer_row->module])->first()->module_data_name; ?>">
                       <td class="border-<?= strtolower($offer_row->exp_type) ?>">
                        <a href="users/jobdetails/<?= $offer_row->id ?>" class="nostyle">
                             <h4 class="title">
                               <?= $offer_row->job_title ?>
                               <span class="pull-right <?= strtolower($offer_row->exp_type) ?>"><?= $offer_row->city ?></span>
                             </h4>
                             <div class="content">
                               <h5 class="<?= strtolower($offer_row->exp_type) ?>">AT <?= $offer_row->company_name ?></h5>
                               <div class="row">
                               <div class="col-lg-12">
                                 <div class="row">
                                 <div class="col-lg-3">
                                <p class="featured__details">
                                 <span class="label featured__label label-success  <?= strtolower($offer_row->exp_type) ?>"><?= $offer_row->job_type ?> </span>
                               </p>
                               </div>
                               <div class="col-lg-3">
                                 <p class="featured__details">
                                 <span class="label featured__label label-success  <?= strtolower($offer_row->exp_type) ?>"><?= $offer_row->salary ?> <?= $offer_row->currency ?> per <?= $offer_row->salary_type ?></span>
                                 </p>
                               </div>
                               <div class="col-lg-3">
                                 <p class="featured__details">
                                 <span class="label featured__label label-success  <?= strtolower($offer_row->exp_type) ?>"><?= $offer_row->occupancy ?></span>
                                 </p>
                               </div>
                               <div class="col-lg-3 text-right  <?= strtolower($offer_row->exp_type) ?>">
                                <p class="featured__details">
                                 <span class="label featured__label label-success  <?= strtolower($offer_row->exp_type) ?>">Starts: <?= date_format($offer_row->project_start, "d/m/Y") ?></span>
                               </p>
                               </div>
                             </div>
                             </div>
                          </div>
                         </div>
                        </a>
                       </td>
                     </tr>
                    <?php endforeach;?>
  								</tbody>
  							</table>
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
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js">   </script>
    <script src="js/tablefilters.js"></script>
    <script src="js/front.js"></script>

    <script src="/./js/scrolltop.js"></script>
    <a href="#" id="scroll" class="nostyle" style="display: none;"><span>

  </body>

</html>
