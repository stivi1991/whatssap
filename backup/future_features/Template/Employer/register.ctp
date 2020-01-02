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
    <link href="../css/preloader.css" rel="stylesheet">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto for copy, Montserrat for headings-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
        <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/./css/scrolltop.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/./favicon.ico">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
        <!-- Preloader Start -->
    <div id="preloader">
      <div class="colorlib-load">
      </div>
    </div>
    <script src="/./js/preloader.js">
    </script>
   </head>
  <body>
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
                </a>
              </li>
              <li class="nav-item">
                <a href="/users/about" class="nav-link">Who are we?
                </a>
              </li>
              
              <?php
                if($User['role']==='CAND_VERIFIED') {
                  echo '';
                 } 
                else if($User['role']==='EMPL_STANDARD') {
                  echo '<li class="nav-item dropdown">
                  <a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Your Account
                  </a>
                  <div aria-labelledby="pages" class="dropdown-menu">
                    <a href="/employer/emplpanel" class="dropdown-item">Employer Panel
                    </a>
                    <a href="/employer/postjob/#pricing" class="dropdown-item">Upgrade to PREMIUM
                    </a>
                    <a href="/employer/postjob" class="dropdown-item">Post a job
                    </a>
                  </div>
                  </li>';
                 }
                else if($User['role']==='EMPL_PREMIUM') {
                  echo '<li class="nav-item dropdown">
                  <a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Your Account
                  </a>
                  <div aria-labelledby="pages" class="dropdown-menu">
                    <a href="/employer/emplpanel" class="dropdown-item">Employer Panel
                    </a>
                    <a href="/employer/candb" class="dropdown-item">Candidate Database
                    </a>
                    <a href="/employer/postjob" class="dropdown-item">Post a job
                    </a>
                  </div>
                  </li>';
                 }
                else {
                  echo '<li class="nav-item dropdown">
                  <a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">For Employers
                  </a>
                  <div aria-labelledby="pages" class="dropdown-menu">
                    <a href="#" data-toggle="modal" data-target="#login-modal-employer" class="dropdown-item">Login or Register
                    </a>
                    <a href="/employer/postjob/#pricing" class="dropdown-item">Pricing
                    </a>
                    <a href="/employer/postjob" class="dropdown-item">Post a job
                    </a>
                  </div>
                  </li>';
                }
                ?>

              <li class="nav-item">
                <?php
                if($User['role']==='CAND_VERIFIED') {
                  echo '<a href="/users/logout" class="nav-link">Logout
                  </a>';
                 } 
                else if($User['role']==='EMPL_STANDARD') {
                  echo '<a href="/employer/logout" class="nav-link">Logout
                  </a>';
                 }
                else if($User['role']==='EMPL_PREMIUM') {
                  echo '<a href="/employer/logout" class="nav-link">Logout
                  </a>';
                 }
                else {
                  echo '<a href="#" data-toggle="modal" data-target="#login-modal" class="nav-link">Login
                  </a>';
                }
                ?>
              </li>
              
              <?php
                if($User['role']==='CAND_VERIFIED') {
                  echo '
                  <li class="nav-item dropdown">
                  <a href="/users/candidatepanel" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0">Candidate Panel
                  </a>
                  </li>';
                 } 
                else if ($User['role']==='EMPL_STANDARD') {
                  echo '<li class="nav-item dropdown">
                  <a href="/employer/postjob" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0">Post a job
                  </a>
                  </li>';
                }
                else if ($User['role']==='EMPL_PREMIUM') {
                  echo '<li class="nav-item dropdown">
                  <a href="/employer/postjob" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0">Post a job
                  </a>
                  </li>';
                }
                else {
                  echo '<li class="nav-item dropdown">
                  <a href="/employer/postjob" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0">Post a job
                  </a>
                  </li>';
                }
                ?>
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
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="job-form-box">
              <h2 class="heading">
                <span class="center-heading">NEW EMPLOYER
                </span>
                <span class="accent"> ACCOUNT
                </span>
                <span class="accent">
                </span>
              </h2>
            </div>
          </div>
        </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <form action="/employer/register" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <h5>General Information
                          </h5>
                    <div class="form-group">
                      <label for="name_first">Company Name
                      </label>
                      <input id="company_name" name="company_name" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="email">Email address
                      </label>
                      <input id="applying_email" name="applying_email" type="email" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="password">Password
                      </label>
                      <input id="password" type="password" 
                             name="password" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="password_confirm">Confirm password
                      </label>
                      <input id="password_confirm" type="password" name="password_confirm" class="form-control" required />
                    </div>
                    </div>
                  <div class="col-md-6">
                    <h5>Invoicing Information
                          </h5>
                    <div class="form-group">
                      <label for="tax_num">Tax Identification Number
                      </label>
                      <input id="tax_num" name="tax_num" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="country">Country
                      </label>
                      <input id="country" name="country" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="city">City
                      </label>
                      <input id="city" name="city" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="address">Address
                      </label>
                      <input id="address" name="address" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="postal_code">Postal Code
                      </label>
                      <input id="postal_code" name="postal_code" type="text" class="form-control" required />
                    </div>
                    
                  </div>
                </div>
                <div class="row">
                  
                    <div class="col-xl-12">
      <h3 class="heading">Pick your package
      </h3>
      <div class="row packages">
        <!--single -->
        <!--standard package -->
        <div class="col-lg-6" align="center">
          <a href="javascript:void(0)" class="nostyle" id="#standard">
            <div class="package box-standard">
            <div class="package-header-middle">
              <h5>Standard
              </h5>
              <div class="meta-text">
              </div>
            </div>
            <div class="price">
              <div class="price-container">
                <h4>
                  2990
                </h4>
                <span style="font-size:12px;color:black">PLN</span>
                <span class="period">
                </span>
              </div>
            </div>
            <ul>
              <li>
                <i class="fa fa-check">
                </i>Faster job posting with pre filled information
              </li>
              <li>
                <i class="fa fa-check">
                </i>Post 5 job offers
              </li>
            </ul>
              <input type="radio" name="standard" id="standard" hidden />
          </div>
          </a>
        </div>
        <!-- premium package -->
        <div class="col-lg-6" align="center">
          <div class="package best-value box-premium open">
            <div class="package-header">
              <h5>Premium
              </h5>
            </div>
            <div class="price">
              <div class="price-container">
                <h4>
                  4990
                </h4>
                <span style="font-size:12px;color:black">PLN</span>
              </div>
            </div>
            <ul>
              <li>
                <i class="fa fa-check">
                </i>Faster job posting with pre filled information
              </li>
              <li>
                <i class="fa fa-check">
                </i>Post 10 job offers
              </li>
            </ul>
            <input type="radio" name="premium" id="premium" checked hidden />
          </div>
        </div>
        <!-- end col-->
      </div>
    </div>
                  </div>
                    
            <?= $this->Form->control('service' , array('div'=>false,'label'=>false,'class'=>'form-control', 'id' => 'service', 'type'=>'text', 'value'=>'Premium Employer Package', 'required'=>true, 'hidden'=>'true')) ?>
                
            <?= $this->Form->control('amount' , array('div'=>false,'label'=>false,'class'=>'form-control', 'id' => 'amount' ,'type'=>'text', 'value'=>'4990', 'required'=>true, 'hidden'=>'true')) ?>
           
            <p class="text-center">
              <center>
                <?= $this->Form->submit(__('Go to summary'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
              </form>
            </div>
          </div>
        </div>
        
        <p class="lead text-center">Already have an account? <a href="#" data-toggle="modal" data-target="#login-modal-employer">Login</a>!
              </p>
        
      </div>
    </section>
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
<script src="../js/preloader.js">
</script>
<script src="../vendor/jquery/jquery.min.js">
</script>
<script src="../vendor/popper.js/umd/popper.min.js"> </script>
<script src="../vendor/bootstrap/js/bootstrap.min.js">
</script>
<script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="../vendor/owl.carousel/owl.carousel.min.js">
</script>
<script src="../js/front.js">
</script>
<script src="/./js/scrolltop.js">
</script>
<script>   
$(".box-standard").click(function(){
  $(this).addClass('open');
  $(".box-premium").removeClass('open');
  $('#standard').prop("checked", true);
  $('#premium').prop("checked", false);
  $('#service').val('Standard Employer Package');
  $('#amount').val('2990');
  //$('<div class="message error" onclick="this.classList.add(\'hidden\');">Invalid credentials. Please try again.</div>').appendTo("body");
  
});
$(".box-premium").click(function(){
  $(this).addClass('open');
  $(".box-standard").removeClass('open');
  $('#premium').prop("checked", true);
  $('#standard').prop("checked", false);
  $('#service').val('Premium Employer Package');
  $('#amount').val('4990');
});
</script>
</body>
</html>