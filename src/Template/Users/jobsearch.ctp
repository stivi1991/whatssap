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
    <link rel="stylesheet" href="../css/tablefilters.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/./favicon.png">
        <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/./css/scrolltop.css">
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
    <script src="../js/preloader.js">
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
                <a href="/users/jobsearch" class="nav-link">Job offers
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
                  <a href="/employer/postjob/#pricing" class="dropdown-item">Pricing
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
                <?= $this->Form->control('redirect', array('value' => strtolower($this->request->params['action']),'type'=>'hidden')) ?>
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

    <div class="row">
      <div class="col-md-6 col-lg-6">
        <div class="col-lg-12 mx-auto">
          <h3 class="heading">FIND YOUR NEXT 
            <span class="accent">PROJECT
            </span>.
          </h3>
          <form id="job-main-form" method="get" action="#" class="job-main-form">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="row">
                    <label for="profession">
                      <b>Location:
                      </b>
                    </label>
                  </div>
                  <?php foreach ($dist_locations as $offer_row): ?>
                  <tr>
                    <button type="button" class="btn btn-info btn-sm btn-space btn-filter-location" data-target-location=
                            <?= $offer_row->location_data_name ?>>
                    <?= $offer_row->city ?>
                  </button>
                </tr>
              <?php endforeach;?>
              <button type="button" class="btn btn-info btn-sm btn-space btn-filter-location" data-target-location="all">All
              </button>
            </div>
            </div>
          <div class="col-md-12">
            <div class="form-group">
              <div class="row">
                <label for="location">
                  <b>Module:
                  </b>
                </label>
              </div>
              <?php foreach ($dist_modules as $offer_row): ?>
              <tr>
                <button type="button" class="btn btn-info btn-sm btn-space btn-filter-module" data-target-module=
                        <?= $offer_row->module_data_name; ?>>
                <?= $offer_row->module_desc ?>
              </button>
            </tr>
          <?php endforeach;?>
          <button type="button" class="btn btn-info btn-sm btn-space btn-filter-module" data-target-module="all">All
          </button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<div class="col-md-6 col-lg-6">
  <h3 class="heading">We have 
    <span class="accent">
      <?= $offer->count(); ?> 
    </span> active jobs
  </h3>
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="table-container">
        <table class="table table-filter">
          <tbody>
            <?php foreach ($offer as $offer_row): ?>
            <tr data-location=
                <?= $offer_row->location_data_name ?> data-module=
            <?= $module->find()->where(['module_desc' => $offer_row->module])->first()->module_data_name; ?>>
            <td>
              <h4 class="title">
                <?= $offer_row->job_title ?>
                <span class="pull-right pagado">
                  <?= $offer_row->city ?>
                </span>
              </h4>
              <div class="content">
                <h5>AT 
                  <?= $offer_row->company_name ?>
                </h5>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row">
                      <div class="col-lg-3">
                        <p class="featured__details">
                          <span class="label featured__label label-success">
                            <?= $offer_row->contract_type ?> 
                          </span>
                        </p>
                      </div>
                      <div class="col-lg-3">
                        <p class="featured__details">
                          <span class="label featured__label label-success">
                            <?= $offer_row->salary ?> 
                            <?= $offer_row->currency ?> per 
                            <?= $offer_row->salary_type ?>
                          </span>
                        </p>
                      </div>
                      <div class="col-lg-3">
                        <p class="featured__details">
                          <span class="label featured__label label-success">
                            <?= $offer_row->occupancy ?>
                          </span>
                        </p>
                      </div>
                      <div class="col-lg-3 text-right">
                        <p>Starts: 
                          <?= date_format($offer_row->project_start, "d/m/Y") ?>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <p>
                    </p>
                  </div>
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
<div class="pages">
  <p class="load-more">
    <a href="#" class="mb-4 btn btn-outline-white-primary">
      <i class="fa fa-chevron-down"> 
      </i>Load more
    </a>
  </p>
  <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-4 mb-4">
    <ul class="pagination">
      <li class="page-item">
        <a href="#" aria-label="Previous" class="page-link">
          <span aria-hidden="true">«
          </span>
          <span class="sr-only">Previous
          </span>
        </a>
      </li>
      <li class="page-item active">
        <a href="#" class="page-link">1
        </a>
      </li>
      <li class="page-item">
        <a href="#" class="page-link">2
        </a>
      </li>
      <li class="page-item">
        <a href="#" class="page-link">3
        </a>
      </li>
      <li class="page-item">
        <a href="#" class="page-link">4
        </a>
      </li>
      <li class="page-item">
        <a href="#" aria-label="Next" class="page-link">
          <span aria-hidden="true">»
          </span>
          <span class="sr-only">Next
          </span>
        </a>
      </li>
    </ul>
  </nav>
</div>
</div>
</div>
</div>
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
<script src="../vendor/bootstrap-select/js/bootstrap-select.min.js">   </script>
<script src="../js/tablefilters.js">
</script>
<script src="../js/front.js">
</script>
<script src="/./js/scrolltop.js">
</script>
<a href="#" id="scroll" class="nostyle" style="display: none;">
  <span>
</body>
</html>
