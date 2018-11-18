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
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>
    <!-- Preloader Start -->
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
              <li class="nav-item"><a href="#" class="nav-link">Who are we?</a></li>
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
        <h3 class="heading">We have <span class="accent"><?= $offer->count(); ?> </span> active jobs</h3>

  				<div class="panel panel-default">
  					<div class="panel-body">
  						<div class="table-container">
  							<table class="table table-filter">
  								<tbody>

                    <?php foreach ($offer as $offer_row): ?>
                     <tr data-location=<?= $offer_row->location_data_name ?> data-module=<?= $module->find()->where(['module_desc' => $offer_row->module])->first()->module_data_name; ?>>
                       <td>
                             <h4 class="title">
                               <?= $offer_row->job_title ?>
                               <span class="pull-right pagado"><?= $offer_row->city ?></span>
                             </h4>
                             <p class="summary"></p>
                           </div>
                         </div>
                       </td>
                     </tr>
                    <?php endforeach;?>

  								</tbody>
  							</table>
  						</div>
  					</div>
  				</div>




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
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js">   </script>
    <script src="js/tablefilters.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
