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
        <h2 class="heading"><span class="center-heading"><?= $offer->job_title ?><br><small>at 
         <a target="_blank" rel="noopener noreferrer" href="//<?= $offer->company_url ?>"> <?= $offer->company_name ?></a></small></span></h2>
        <div class="job-detail-description"><span class="center-heading"><i class="fa fa-map-marker job__location"> 
            </i><?= $offer->city ?>
          | <?= $offer->job_type ?> |<span class="badge featured-badge badge-success"><?= $offer->module ?></span></span>
        </div>
      </div>
    </section>
      <section>






    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h3>HTML Ipsum Presents</h3>
            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
            <h4>Header Level 4</h4>
            <ol>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>
            <blockquote class="blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
            </blockquote>
            <h5>Header Level 5</h5>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>
            <h4>Header Level 4</h4>
            <ol>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>
            <blockquote class="blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
            </blockquote>
            <h5>Header Level 5</h5>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>
            <div class="job-detail__apply-bottom"><a href="#" class="btn btn-outline-white-primary">Apply for this job</a></div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-3">
            <h4>About Bootstrapious</h4>
            <p class="job-detail__company-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. </p>
            <p class="job-detail__social social social--outline"><a href="#" data-toggle="tooltip" data-placement="top" title="Website" class="link">
                 
                <i class="fa fa-link"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter" class="twitter">
                 
                <i class="fa fa-twitter"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook" class="facebook"><i class="fa fa-facebook"></i> </a></p>
            <div class="job-detail__apply-top"><a href="#" class="btn btn-outline-white-primary">Apply for this job</a></div>
          </div>
        </div>
      </div>
    </section>
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

   </body>
</html>
