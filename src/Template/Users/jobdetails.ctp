
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
            <i class="fa fa-map-marker job__location" style="color:white !important;"> 
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
                      <a href="#" data-toggle="modal" data-target="#apply-modal" class="btn navbar-btn btn-outline-light mb-5 mb-lg-0 largebtn">Apply
                      </a>
                  </span>
                </div>
              </div>
            </div>
            <div class="box box_title effect6">
              <div class="row">
                <div class="col-lg-8 form-group">
                  <h3 class="titleclose" style="text-transform: uppercase; font-size: 19px; color:#675682;"> 
                    <?= $offer->job_title ?> 
                  </h3>
                </div>
              </div>
              <div class="row rowclose smaller-font">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 form-group">
                  <label for="function" class="thinfont labelclose">Function:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->function ?> 
                  </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 form-group">
                  <label for="module" class="thinfont labelclose">Module:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->module ?> 
                  </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 form-group">
                  <label for="exp_type" class="thinfont labelclose">Level of expertise:
                  </label>
                  <p class="<?= strtolower($offer->exp_type) ?> capitalfont"> 
                    <?= $offer->exp_type ?> 
                  </p>
                </div>
              </div>
              <div class="row rowclose  smaller-font">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 form-group">
                  <label for="country" class="thinfont labelclose">Country:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->country ?> 
                  </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 form-group">
                  <label for="city" class="thinfont labelclose">City:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->city ?> 
                  </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 form-group">
                  <label for="job_type" class="thinfont labelclose">Type of contract:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->job_type ?> 
                  </p>
                </div>
              </div>
              <div class="row rowclose smaller-font">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 form-group">
                  <label for="occupancy" class="thinfont labelclose">Occupancy:
                  </label>
                  <p class="capitalfont"> 
                    <?= $offer->occupancy ?> 
                  </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 form-group">
                  <label for="project_start" class="thinfont labelclose">Expected start date:
                  </label>
                  <p class="capitalfont"> 
                    <?= date_format($offer->project_start, 'Y/m/d') ?> 
                  </p>
                </div>
                <?php if($offer->duration != 'Permanent') { echo  
                '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 form-group">
                  <label for="duration" class="thinfont labelclose">Expected duration in months:
                  </label>
                  <p class="capitalfont"> 
                    ' . $offer->duration . ' 
                  </p>
                </div>'; }
                ?>
              </div>
              <div class="row rowclose smaller-font">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 form-group">
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
                    <p class="lead thinfont" style="text-transform: uppercase; font-size: 11px; letter-spacing:0.1rem"> 
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
                    <span class="fa fa-globe fa-lg socialicons">
                    </span>
                    </a>
                    <a target="_blank" rel="noopener noreferrer" href="<?= $offer->company_facebook ?>"> 
                    <span class="fa fa-facebook fa-lg socialicons">
                    </span>
                    </a>
                    <a target="_blank" rel="noopener noreferrer" href="<?= $offer->company_linkedin ?>"> 
                    <span class="fa fa-linkedin fa-lg socialicons">
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
          echo '
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height effect6 box-hover">
              <div class="top">
             
              </div>
              <div class="content">
              <a href="/users/jobdetails/' . $similar_row->id . '">
                <h5 class="heading">' .
                  $similar_row->job_title . '<br> AT <span style="color:#E52A6F;">' . $similar_row->company_name . '</span>
                </h5>
                    <p class="featured__details" style="color:black;"> 
                      <i class="fa fa-map-marker job__location">
                      </i>' . $similar_row->country . ', ' . $similar_row->city . '
                      <span class="badge featured-badge badge-success jewel">' . $similar_row->module . '
                      </span>
                    </p>
                  </a>
                </div>
              </div>
            </div>
           ';
                  $rows += 1;
                    }
                  endforeach;

            foreach ($similar_module as $similar_row):
                  if($rows < 3) {
          echo '
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height effect6 box-hover">
              <div class="top">
             
              </div>
              <div class="content">
              <a href="/users/jobdetails/' . $similar_row->id . '">
                <h5 class="heading">' .
                  $similar_row->job_title . '<br> AT <span style="color:#E52A6F;">' . $similar_row->company_name . '</span>
                </h5>
                    <p class="featured__details" style="color:black;"> 
                      <i class="fa fa-map-marker job__location">
                      </i>' . $similar_row->country . ', ' . $similar_row->city . '
                      <span class="badge featured-badge badge-success jewel">' . $similar_row->module . '
                      </span>
                    </p>
                  </a>
                </div>
              </div>
            </div>
           ';
                  $rows += 1;
                    }
                  endforeach;

          foreach ($similar_city as $similar_row):
                  if($rows < 3) {
          echo '<a href="/users/jobdetails/' . $similar_row->id . '">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height effect6 box-hover">
              <div class="top">
             
              </div>
              <div class="content">
              <a href="/users/jobdetails/' . $similar_row->id . '">
                <h5 class="heading">' .
                  $similar_row->job_title . '<br> AT <span style="color:#E52A6F;">' . $similar_row->company_name . '</span>
                </h5>
                    <p class="featured__details" style="color:black;">  
                      <i class="fa fa-map-marker job__location">
                      </i>' . $similar_row->country . ', ' . $similar_row->city . '
                      <span class="badge featured-badge badge-success jewel">' . $similar_row->module . '
                      </span>
                    </p>
                  </a>
                </div>
              </div>
            </div>
           ';
                  $rows += 1;
                    }
                  endforeach;

          foreach ($similar_random as $similar_row):
                  if($rows < 3) {
                    
          echo '
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="box-image-text bg-visible full-height effect6 box-hover">
              <div class="top">
             
              </div>
              <div class="content">
              <a href="/users/jobdetails/' . $similar_row->id . '">
                <h5 class="heading">' .
                  $similar_row->job_title . '<br> AT <span style="color:#E52A6F;">' . $similar_row->company_name . '</span>
                </h5>
                    <p class="featured__details" style="color:black;"> 
                      <i class="fa fa-map-marker job__location">
                      </i>' . $similar_row->country . ', ' . $similar_row->city . '
                      <span class="badge featured-badge badge-success jewel">' . $similar_row->module . '
                      </span>
                    </p>
                  </a>
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
<script>
  $('#candidate_cv').bind('change', function () {
  var filename = $("#candidate_cv").val();
  if (/^\s*$/.test(filename)) {
    $(".file-upload").removeClass('active');
    $("#noFile").text("No file chosen..."); 
  }
  else {
    $(".file-upload").addClass('active');
    $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
  }
});
</script>
<a href="#" id="scroll" class="nostyle" style="display: none;">
  <span>
    </body>
  </html>
