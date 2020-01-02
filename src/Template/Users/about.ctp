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
    
    
 <?= $this->element('header') ?>

    <section class="job-form-section job-form-section--image">
      <div class="container">
        <h2 class="heading">
          <span class="center-heading">Who are we?
          </span>
        </h2>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="lead thinfont" style="text-transform: uppercase; font-size: 11px;letter-spacing:0.1rem">Hi!<br>
We are a polish start-up based in Poznań, Poland.<br> 
We worked in Recruitment and in  IT sector and realized that there is no recruiting platform dedicated for SAP Consultants. Companies struggle to connect and to find the place for job offers and candidates struggle to see through so many messages and a lot of spam!<br>
<br>
We wanted to make space only for SAP Consultants and Developers. The place they can easily find the offer and apply in seconds - without making profiles and wasting time! That's why "What's SAP" was born.<br>
<br>
What is really important for us it is transparency. Usually a lot of agencies and consulting companies don’t want to tell the financial rate for the project. They wanted take as much as possible from hiring you. That’s way their offers don’t have a information about money. We wanted to solve this issue and with every job offer must be financial rate. So you know exactly what is in their offer.<br>
<br>
If you want to know more about us:<br>
<br>
            </p>
          </div>
        </div>
        <div class="row team">
          <div class="col-lg-6 col-sm-6">
            <div class="team-member">
              <div class="image">
                <img src="/./img/person-1.jpg" alt="" class="img-fluid rounded-circle team-image">
              </div>
              <h3 class="h4">
                <a href="#">Marika Gajewska-Święcicka
                </a>
              </h3>
              <p class="role"><strong>OWNER</strong>
              </p>
              <div class="social">
                <a target="_blank" href="https://www.facebook.com/marika.gajewskaswiecicka" class="external facebook">
                  <i class="fa fa-facebook">
                  </i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/in/marika-gajewska-święcicka/" class="external facebook">
                  <i class="fa fa-linkedin">
                  </i>
                </a>
                <a target="_blank" href="#" data-toggle="modal" data-target="#contact-modal" class="email">
                  <i class="fa fa-envelope">
                  </i>
                </a>
              </div>
              <div class="text thinfont" style="text-transform: uppercase; font-size: 11px !important;letter-spacing:0.1rem !important">
                <p>I am an owner and chef at What's SAP platform. I'm really passionate about psychology, fair business and employer branding. I also love cats and dogs, and lately started to learn ukulele! Please find me on social media and say hi!
                </p>
              </div>
            </div>
            <!-- /.team-member-->
          </div>
          <div class="col-lg-6 col-sm-6">
            <div class="team-member">
              <div class="image">
                <img src="/./img/person-2.jpg" alt="" class="img-fluid rounded-circle team-image">
              </div>
              <h3 class="h4">
                <a href="#">Przemysław Święcicki
                </a>
              </h3>
              <p class="role"><strong>LEAD DEVELOPER</strong>
              </p>
              <div class="social">
                <a target="_blank" href="https://www.facebook.com/przemek.swiecicki" class="external facebook">
                  <i class="fa fa-facebook">
                  </i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/in/przemys%C5%82aw-%C5%9Bwi%C4%99cicki-2b773673/" class="external facebook">
                  <i class="fa fa-linkedin">
                  </i>
                </a>
                <a target="_blank" href="#" data-toggle="modal" data-target="#contact-modal" class="email">
                  <i class="fa fa-envelope">
                  </i>
                </a>
              </div>
              <div class="text thinfont" style="text-transform: uppercase; font-size:11px !important;letter-spacing:0.1rem !important">
                <p>I'm a cat, dog, and heavy guitar riff lover. When I'm not programming at the moment, you can usually find me in my small home recording studio. Passionate about guitar playing, and metal music production. Besides creating What's SAP platform, I'm a SAP HANA consultant, with ABAP and SAP Marketing background. Always first to learn new stuff (like creating What's SAP).
                </p>
              </div>
            </div>
            <!-- /.team-member-->
          </div>
        </div>
      </div>
    </section>
    
<?= $this->element('footer') ?>
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