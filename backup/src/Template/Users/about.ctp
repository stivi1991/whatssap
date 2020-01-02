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
        <h2 class="heading"><span class="center-heading">Who are we?</span></h2>
      </div>
    </section>

        <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="lead text-center">This is the lead paragraph of the article. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
          </div>
        </div>
        <div class="row team">
          <div class="col-lg-3 col-sm-6">
            <div class="team-member">
              <div class="image"><img src="/./img/person-1.jpg" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h4"><a href="#">Han Solo</a></h3>
              <p class="role">founder</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
              <div class="text">
                <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            <!-- /.team-member-->
            
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-member">
              <div class="image"><img src="/./img/person-2.jpg" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h4"><a href="#">Luke Skywalker</a></h3>
              <p class="role">CTO</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
              <div class="text">
                <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            <!-- /.team-member-->
            
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-member">
              <div class="image"><img src="/./img/person-3.jpg" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h4"><a href="#">Princess Leia</a></h3>
              <p class="role">Team Leader</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
              <div class="text">
                <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            <!-- /.team-member-->
            
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="team-member">
              <div class="image"><img src="/./img/person-4.jpg" alt="" class="img-fluid rounded-circle"></div>
              <h3 class="h4"><a href="#">Jabba Hut</a></h3>
              <p class="role">Lead developer</p>
              <div class="social"><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></div>
              <div class="text">
                <p> Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
            </div>
            <!-- /.team-member-->
            
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

   </body>
</html>
