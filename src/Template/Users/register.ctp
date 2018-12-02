<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Jobs - Bootstrap 4 template
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
    <link rel="stylesheet" href="../css/rating.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/dynamictable.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/bootstrap-tagsinput.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/profilepicture.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script>
      $(document).ready(function() {
        $(window).keydown(function(event){
          if(event.keyCode == 13) {
            event.preventDefault();
            return false;
          }
        }
                         );
      }
                       );
      $('#tags').tagsinput({
        confirmKeys: [44, 32, 13]
      }
                          );
    </script>
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
            <img src="/img/logo.png" alt="logo" class="d-none d-lg-block">
            <img src="img/logo-small.png" alt="logo" class="d-block d-lg-none">
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
                <a href="#" class="nav-link">Who are we?
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
    <!-- *** LOGIN MODAL CANDIDATE***_________________________________________________________
-->
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
            <?= $this->Form->create('User', array(
'url' => array(
'controller' => 'users',
'action' => 'login'
)
)); ?>
            <div class="form-group">
              <?= $this->Form->control('email', array(
'div' => false,
'label' => false,
'class' => 'form-control',
'type' => 'email',
'placeholder' => 'Email',
'value' => ''
)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('password', array(
'div' => false,
'label' => false,
'class' => 'form-control',
'type' => 'password',
'placeholder' => 'Password',
'value' => ''
)) ?>
            </div>
            <p class="text-center">
              <center>
                <?= $this->Form->submit(__('Login'), array(
'class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0'
)); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
            <p class="text-center text-muted">Not registered yet?
            </p>
            <p class="text-center text-muted">
              <a href="/users/register">
                <strong>Register now
                </strong>
              </a>! It is easy and done in 1 minute and gives you access to special discounts and much more!
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
            <?= $this->Form->create('Employer', array(
'url' => array(
'controller' => 'employer',
'action' => 'login'
)
)); ?>
            <div class="form-group">
              <?= $this->Form->control('email', array(
'div' => false,
'label' => false,
'class' => 'form-control',
'type' => 'email',
'placeholder' => 'Email',
'value' => ''
)) ?>
            </div>
            <div class="form-group">
              <?= $this->Form->control('password', array(
'div' => false,
'label' => false,
'class' => 'form-control',
'type' => 'password',
'placeholder' => 'Password',
'value' => ''
)) ?>
            </div>
            <p class="text-center">
              <center>
                <?= $this->Form->submit(__('Login'), array(
'class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0'
)); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
            <p class="text-center text-muted">Not registered yet?
            </p>
            <p class="text-center text-muted">
              <a href="/employer/register">
                <strong>Register now
                </strong>
              </a>! It is easy and done in 1 minute and gives you access to special discounts and much more!
            </p>
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
              <h2 class="heading">
                <span class="center-heading">NEW CANDIDATE
                </span>
                <span class="accent"> ACCOUNT
                </span>
                <span class="accent">
                </span>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <form action="/users/register" method="post">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label for="name_first">First Name
                      </label>
                      <input id="name_first" name="name_first" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="name_last">Last Name
                      </label>
                      <input id="name_last" name="name_last" type="text" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="email">Email address
                      </label>
                      <input id="email" name="email" type="email" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="password">Password
                      </label>
                      <input id="password" type="password" name="password" class="form-control" required />
                    </div>
                    <div class="form-group">
                      <label for="password_confirm">Confirm password
                      </label>
                      <input id="password_confirm" type="password" name="password_confirm" class="form-control" required />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="profile">
                      <div class="photo">
                        <input type="file" accept="image/*">
                        <div class="photo__helper">
                          <div class="photo__frame photo__frame--circle">
                            <canvas class="photo__canvas">
                            </canvas>
                            <div class="picture is-empty">
                              <p class="picture--desktop">Drop your photo here or browse your computer.
                              </p>
                              <p class="picture--mobile">Tap here to select your picture.
                              </p>
                            </div>
                            <div class="picture is-loading">
                              <i class="fa fa-2x fa-spin fa-spinner">
                              </i>
                            </div>
                            <div class="picture is-dragover">
                              <i class="fa fa-2x fa-cloud-upload">
                              </i>
                              <p>Drop your photo
                              </p>
                            </div>
                            <div class="picture is-wrong-file-type">
                              <p>Only images allowed.
                              </p>
                              <p class="picture--desktop">
                                <span>Drop your photo here or browse your computer.
                                </span>
                              </p>
                              <p class="picture--mobile">Tap here to select your picture.
                              </p>
                            </div>
                            <div class="picture is-wrong-image-size">
                              <p>Your photo must be larger than 350px.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="photo__options hide">
                          <div class="photo__zoom">
                            <input type="range" class="zoom-handler">
                          </div>
                          <a href="javascript:;" class="remove">
                            <i class="fa fa-trash">
                            </i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <div class="table-title">
                      <div class="row">
                        <div class="col-sm-8">
                          <h5>Skills
                          </h5>
                        </div>
                        <div class="col-sm-4">
                          <button type="button" class="btn btn-info add-new">
                            <i class="fa fa-plus">
                            </i> Add New Skill
                          </button>
                        </div>
                      </div>
                    </div>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Skill name
                          </th>
                          <th>Level
                          </th>
                          <th>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                  <div class="row">
                    <div class="form-group">
                      <div class="col-lg-12">
                        <h5>Preffered Work Locations
                        </h5>
                      </div>
                      <div class="col-lg-12">
                        <input id='preffered_location' type="text" value="" data-role="tagsinput" name="preffered_location" class="form-control" required />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-user-md">
                    </i> Register
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <h3 class="heading">Login
              </h3>
              <p class="lead">Already have an account? Login!
              </p>
              <hr>
              <form action="client-dashboard.html" method="post">
                <div class="form-group">
                  <label for="email">Email
                  </label>
                </div>
                <input id="email" type="text" class="form-control">
              </form>
              <div class="form-group">
                <label for="password">Password
                </label>
                <input id="password" type="password" class="form-control">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-sign-in">
                  </i> Log in
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <hr>
      <div class="footer__copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-md-left text-center">
              <p>&copy;2018 What's SAP
              </p>
            </div>
            <div class="col-md-6 text-md-right text-center">
              <p class="credit">Amity Consulting
              </a>
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
<script src="../js/bootstrap-tagsinput.js">   </script>
<script src="../js/profilepicture.js">   </script>
<script src="../js/front.js">
</script>
<script src="../js/dynamictable.js">
</script>
</body>
</html>