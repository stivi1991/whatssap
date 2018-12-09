
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
    <!-- Favicon-->
    <link rel="shortcut icon" href="/./favicon.ico">
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
                <a href="/users/howto" class="nav-link">How to start
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

    <!-- *** APPLY MODAL CANDIDATE***-->
    <div id="apply-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Apply for this offer
            </h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
              <span aria-hidden="true">×
              </span>
            </button>
          </div>
          <div class="modal-body">
            <?= $this->Flash->render('auth'); ?>
            <?= $this->Form->create('User', array('type'=>'file','url'=>array('controller'=>'users', 'action'=>'jobapply',$offer->id,$offer->apply_email,$offer->job_title,$offer->city,$offer->country,$offer->company_name))); ?>
            <div class="form-group">
              <?= $this->Form->control('candidate_name' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Full Name','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('candidate_email', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'email','placeholder'=>'Email','value'=>'', 'required'=>true)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->file('candidate_cv', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'file','placeholder'=>'Upload your CV...', 'required'=>true)) ?>
            </div>
            <p class="text-center">
              <center>
                <?= $this->Form->submit(__('Apply'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** APPLY MODAL END ***-->


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
        <h2 class="heading">
          <span class="center-heading">
            <?= $offer->job_title ?>
            <br>
            <small>at 
              <strong>
                <a target="_blank" rel="noopener noreferrer" href="<?= $offer->company_url ?>"> 
                  <?= $offer->company_name ?>
                </a>
              </strong>
            </small>
          </span>
        </h2>
        <div class="job-detail-description">
          <span class="center-heading">
            <i class="fa fa-map-marker job__location"> 
            </i> 
            <?= $offer->country ?>, 
            <?= $offer->city ?>
            | 
            <?= $offer->job_type ?> |
            <span class="badge featured-badge badge-success jewel">
              <?= $offer->module ?>
            </span>
          </span>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="col-lg-12">
            <div class="row"> 
              <div class="col-lg-12">
                <div class="col-lg-12">
                  <br>
                  <span class="pull-right">
                    <div class="job-detail__apply-top">
                      <a href="#" data-toggle="modal" data-target="#apply-modal" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0 largebtn">Apply
                      </a>
                    </div>
                  </span>
                </div>
              </div>
            </div>
            <div class="box box_title effect6">
              <div class="row">
                <div class="col-lg-8 form-group">
                  <h3 class="titleclose" style="text-transform: uppercase; font-size: 18px"> 
                    <?= $offer->job_title ?> 
                  </h3>
                </div>
              </div>
              <div class="row rowclose smaller-font">
                <div class="col-xl-4 form-group">
                  <label for="function" class="thinfont labelclose">Function:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->function ?> 
                  </p>
                </div>
                <div class="col-lg-4 form-group">
                  <label for="module" class="thinfont labelclose">Module:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->module ?> 
                  </p>
                </div>
                <div class="col-xl-4 form-group">
                  <label for="exp_type" class="thinfont labelclose">Level of expertise:
                  </label>
                  <p class="<?= strtolower($offer->exp_type) ?> capitalfont"> 
                    <?= $offer->exp_type ?> 
                  </p>
                </div>
              </div>
              <div class="row rowclose  smaller-font">
                <div class="col-xl-4 form-group">
                  <label for="country" class="thinfont labelclose">Country:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->country ?> 
                  </p>
                </div>
                <div class="col-lg-4 form-group">
                  <label for="city" class="thinfont labelclose">City:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->city ?> 
                  </p>
                </div>
                <div class="col-xl-4 form-group">
                  <label for="job_type" class="thinfont labelclose">Type of contract:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->job_type ?> 
                  </p>
                </div>
              </div>
              <div class="row rowclose smaller-font">
                <div class="col-xl-4 form-group">
                  <label for="occupancy" class="thinfont labelclose">Occupancy:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->occupancy ?> 
                  </p>
                </div>
                <div class="col-xl-4 form-group">
                  <label for="project_start" class="thinfont labelclose">Expected start date:
                  </label>
                  <p class="capitalfont"> 
                    <?= date_format($offer->project_start, 'Y/m/d') ?> 
                  </p>
                </div>
                <div class="col-xl-4 form-group">
                  <label for="duration" class="thinfont labelclose">Expected duration (months):
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->duration ?> 
                  </p>
                </div>
              </div>
              <div class="row rowclose smaller-font">
                <div class="col-xl-4 form-group">
                  <label for="country" class="thinfont labelclose">Salary:
                  </label>
                  <p class="capitalfont"> 
                            <?= $offer->salary_from ?> - 
                            <?= $offer->salary_to ?> 
                            <?= $offer->salary_kind ?>
                            <?= $offer->currency ?> per 
                            <?= $offer->salary_type ?>
                  </p>
                </div>
              </div>
            </div>

            <!--  Description box !-->
                <div class="box box_title effect9">
                  <div class="col-lg-12 form-group">
                    <p class="lead thinfont" style="text-transform: uppercase; font-size: 13px"> 
                      <?= $offer->description ?> 
                    </p>
                  </div>
                </div>
              <div class="row">
                <div class="col-lg-6">
                  <span class="pull-left">
                    <div class="job-detail-description">
                      Find company on:
                    </div>
                    <a target="_blank" rel="noopener noreferrer" href="<?= $offer->company_url ?>"> 
                    <span class="fa fa-globe fa-2x socialicons">
                    </span>
                    </a>
                    <a target="_blank" rel="noopener noreferrer" href="<?= $offer->company_facebook ?>"> 
                    <span class="fa fa-facebook fa-2x socialicons">
                    </span>
                    </a>
                    <a target="_blank" rel="noopener noreferrer" href="<?= $offer->company_linkedin ?>"> 
                    <span class="fa fa-linkedin fa-2x socialicons">
                    </span>
                    </a>
                  </span>
                </div>
                <div class="col-lg-6">
                  <span class="pull-right">
                    <a href="#" data-toggle="modal" data-target="#apply-modal" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0 largebtn">Apply
                    </a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <section class="bg-light-gray">
      <div class="container">
        <h3 class="heading">You might also like
        </h3>
        <div class="row featured align-items-stretch">

                  <?php $rows = 0; 

                  foreach ($similar_all as $similar_row):
                  if($rows < 3) {
          echo '<div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top">
                <a href="/users/jobdetails/' . $similar_row->id . '">
                </a>
              </div>
              <div class="content">
                <h5>
                  <a href="/users/jobdetails/' . $similar_row->id . '">' . $similar_row->job_title . '<br> AT ' . $similar_row->company_name . '
                  </a>
                </h5>
                    <p class="featured__details">  
                      <i class="fa fa-map-marker job__location">
                      </i>' . $similar_row->country . ', ' . $similar_row->city . '
                      <span class="badge featured-badge badge-success jewel">' . $similar_row->module . '
                      </span>
                    </p>
                </div>
              </div>
            </div>
           ';
                  $rows += 1;
                    }
                  endforeach;

            foreach ($similar_module as $similar_row):
                  if($rows < 3) {
          echo '<div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top">
                <a href="/users/jobdetails/' . $similar_row->id . '">
                </a>
              </div>
              <div class="content">
                <h5>
                  <a href="/users/jobdetails/' . $similar_row->id . '">' . $similar_row->job_title . '<br> AT ' . $similar_row->company_name . '
                  </a>
                </h5>
                    <p class="featured__details">  
                      <i class="fa fa-map-marker job__location">
                      </i>' . $similar_row->country . ', ' . $similar_row->city . '
                      <span class="badge featured-badge badge-success jewel">' . $similar_row->module . '
                      </span>
                    </p>
                </div>
              </div>
            </div>
           ';
                  $rows += 1;
                    }
                  endforeach;

          foreach ($similar_city as $similar_row):
                  if($rows < 3) {
          echo '<div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top">
                <a href="/users/jobdetails/' . $similar_row->id . '">
                </a>
              </div>
              <div class="content">
                <h5>
                  <a href="/users/jobdetails/' . $similar_row->id . '">' . $similar_row->job_title . '<br> AT ' . $similar_row->company_name . '
                  </a>
                </h5>
                    <p class="featured__details">  
                      <i class="fa fa-map-marker job__location">
                      </i>' . $similar_row->country . ', ' . $similar_row->city . '
                      <span class="badge featured-badge badge-success jewel">' . $similar_row->module . '
                      </span>
                    </p>
                </div>
              </div>
            </div>
           ';
                  $rows += 1;
                    }
                  endforeach;

          foreach ($similar_random as $similar_row):
                  if($rows < 3) {
          echo '<div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height">
              <div class="top">
                <a href="/users/jobdetails/' . $similar_row->id . '">
                </a>
              </div>
              <div class="content">
                <h5>
                  <a href="/users/jobdetails/' . $similar_row->id . '">' . $similar_row->job_title . '<br> AT ' . $similar_row->company_name . '
                  </a>
                </h5>
                    <p class="featured__details">  
                      <i class="fa fa-map-marker job__location">
                      </i>' . $similar_row->country . ', ' . $similar_row->city . '
                      <span class="badge featured-badge badge-success jewel">' . $similar_row->module . '
                      </span>
                    </p>
                </div>
              </div>
            </div>
           ';
                  $rows += 1;
                    }
                  endforeach;



                  ?>

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
<script src="/./vendor/jquery/jquery.min.js">
</script>
<script src="/./vendor/popper.js/umd/popper.min.js"> </script>
<script src="/./vendor/bootstrap/js/bootstrap.min.js">
</script>
<script src="/./vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="/./vendor/owl.carousel/owl.carousel.min.js">
</script>
<script src="/./vendor/bootstrap-select/js/bootstrap-select.min.js">   </script>
<script src="/./js/front.js">
</script>
<script src="/./js/scrolltop.js">
</script>
<a href="#" id="scroll" class="nostyle" style="display: none;">
  <span>
    </body>
  </html>
