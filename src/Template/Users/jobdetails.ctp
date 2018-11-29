<?php
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

      <!-- Custom stylesheet - for your changes-->
      <link rel="stylesheet" href="/./css/scrolltop.css">
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
        <h2 class="heading"><span class="center-heading"><?= $offer->job_title ?><br><small>at 
         <strong><a target="_blank" rel="noopener noreferrer" href="//<?= $offer->company_url ?>"> <?= $offer->company_name ?></a></strong></small>
       </span></h2>
        <div class="job-detail-description"><span class="center-heading"><i class="fa fa-map-marker job__location"> 
            </i> <?= $offer->country ?>, <?= $offer->city ?>
          | <?= $offer->job_type ?> |<span class="badge featured-badge badge-success"><?= $offer->module ?></span></span>
        </div>
      </div>
    </section>


      <div class="container">
        <div class="row">
          <div class="col-lg-12">

                    <div class="col-lg-12">
                            <div class="col-lg-12">
                            <div class="box box_title effect6">

                                <div class="row">
                                    <div class="col-lg-8 form-group">
                                        <h3> <?= $offer->job_title ?> </h3>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-xl-4 form-group">
                                        <label for="function" class="thinfont">Function:</label>
                                        <p class="capitalfont"> <?= $offer->function ?> </p>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="module" class="thinfont">Module:</label>
                                        <p class="capitalfont"> <?= $offer->module ?> </p>
                                    </div>
                                    <div class="col-xl-4 form-group">
                                        <label for="exp_type" class="thinfont">Level of expertise:</label>
                                        <p class="capitalfont"> <?= $offer->exp_type ?> </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-4 form-group">
                                        <label for="country" class="thinfont">Country:</label>
                                        <p class="capitalfont"> <?= $offer->country ?> </p>
                                    </div>
                                    <div class="col-lg-4 form-group">
                                        <label for="city" class="thinfont">City:</label>
                                        <p class="capitalfont"> <?= $offer->city ?> </p>
                                    </div>
                                    <div class="col-xl-4 form-group">
                                        <label for="job_type" class="thinfont">Type of contract:</label>
                                        <p class="capitalfont"> <?= $offer->job_type ?> </p>
                                    </div>
                                </div>
                            </div>
                          </div>

<div class="row"> 

<div class="col-lg-12">
                          <span class="pull-right">
                                      <div class="job-detail__apply-top"><a href="#" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0 largebtn">Apply</a></div>
                         </span>
                        </div>

</div>


<!--  Detailed information box !-->

                            <div class="box box_title effect7">
                                <div class="row">

                                    <div class="col-xl-3 form-group">
                                        <label for="country" class="thinfont">Salary:</label>
                                        <p class="capitalfont"> <?= $offer->salary ?> <?= $offer->currency ?> per <?= $offer->salary_type ?> </p>
                                    </div>

                                    <div class="col-xl-2 form-group">
                                        <label for="occupancy" class="thinfont">Occupancy:</label>
                                        <p class="capitalfont"> <?= $offer->occupancy ?> </p>
                                    </div>
                                        <div class="col-xl-3 form-group">
                                            <label for="project_start" class="thinfont">Expected start date:</label>
                                            <p class="capitalfont"> <?= $offer->project_start ?> </p>
                                        </div>
                                        <div class="col-xl-4 form-group">
                                            <label for="duration" class="thinfont">Expected duration (months):</label>
                                            <p class="capitalfont"> <?= $offer->duration ?> </p>
                                        </div>
                                    </div>
                                </div>




<!--  Description box !-->


                            <div class="row">
                                <div class="job-detail-description">
                                    Description
                                </div>
                            </div>

                            <div class="row">
                                <div class="box box_title effect9">
                                    <div class="col-lg-12 form-group">
                                        <p> <?= $offer->description ?> </p>
                                    </div>
                                </div>
                            </div>
<div class="row">

<div class="col-lg-6">
<span class="pull-left">
<p class="job-detail__social social social--outline"><a href="#" data-toggle="tooltip" data-placement="top" title="Website" class="link">
                 
                                      <i class="fa fa-link"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter" class="twitter">
                 
                                      <i class="fa fa-twitter"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="facebook"><i class="fa fa-facebook"></i> </a></p>

</span>
</div>
<div class="col-lg-6">
<span class="pull-right">
            <div class="job-detail__apply-bottom"><a href="#" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0 largebtn">Apply</a>
            </div>
</span>

</div>

          </div>

        </div>
      </div>
    </div>
  </div>





    <section class="bg-light-gray">
      <div class="container">
        <h3 class="heading">You might also like</h3>
        <div class="row featured align-items-stretch">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="img/featured1.jpg" alt="" class="img-fluid"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="img/company-1.png" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Software Engineer</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="badge featured-badge badge-success">Full Time</span></p>
                <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him full not mean evil. Prepare garrets it expense windows shewing do an.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="img/featured2.jpg" alt="" class="img-fluid"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="img/company-3.png" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Customer support</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>Palo Alto<span class="badge featured-badge badge-success">Full Time</span></p>
                <p>Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people so basket ladies window expect. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top"><a href="detail.html">
                  <div class="image"><img src="img/featured3.jpg" alt="" class="img-fluid"></div>
                  <div class="bg"></div>
                  <div class="logo"><img src="img/company-2.png" alt="" style="max-width: 80px;"></div></a></div>
              <div class="content">
                <h5><a href="detail.html">Graphic designer</a></h5>
                <p class="featured__details">  <i class="fa fa-map-marker job__location"></i>San Francisco<span class="badge featured-badge badge-dark">Part Time</span></p>
                <p>Fifth abundantly made Give sixth hath. Cattle creature i be dont them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
              </div>
            </div>
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
      <script src="/./vendor/jquery/jquery.min.js"></script>
      <script src="/./vendor/popper.js/umd/popper.min.js"> </script>
      <script src="/./vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="/./vendor/jquery.cookie/jquery.cookie.js"> </script>
      <script src="/./vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="/./vendor/bootstrap-select/js/bootstrap-select.min.js">   </script>
      <script src="/./js/front.js"></script>

      <script src="/./js/scrolltop.js"></script>
      <a href="#" id="scroll" class="nostyle" style="display: none;"><span>


   </body>
</html>
