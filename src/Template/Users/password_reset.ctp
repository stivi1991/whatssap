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

    </header>

    <section class="job-form-section job-form-section--image">
      <div class="container">
        <h2 class="heading">
          <span class="center-heading">Password reset
          </span>
        </h2>
        </div>
    </section>


<section>
      <div class="container">
        <div class="col-lg-12 mx-auto">
          <form method="post">
            <div class="box box_title effect6">
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="password" class="thinfont">New password:
                  </label>
                  <input id="password" type="password" pattern="((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).{8,}" oninvalid="setCustomValidity('Please enter at least 8 characters, one capital letter, number, and special character.')" placeholder="New password" name="password" class="form-control capitalfont" required />
                </div>
                <div class="col-lg-12 form-group">
                  <label for="password_confirm" class="thinfont">Confirm password:
                  </label>
                  <input id="password_confirm" type="password" placeholder="Confirm password" name="password_confirm" class="form-control capitalfont" required />
                </div>
              </div>
              <p class="text-center">
              <center>
                <?= $this->Form->submit(__('Reset password'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
              </center>
            </p>
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
</body>
</html>