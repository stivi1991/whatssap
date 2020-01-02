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
    <link href="css/preloader.css" rel="stylesheet">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto for copy, Montserrat for headings-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/tablefilters.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/./css/scrolltop.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/./favicon.ico">
  </head>
  <body>
    <!-- Preloader Start -->
    <script src="/./vendor/jquery/jquery.min.js">
    </script>
    <div id="preloader">
      <div class="colorlib-load">
      </div>
    </div>
    <script src="../js/preloader.js">
    </script>
    
<?= $this->element('header') ?>

<?= $this->Flash->render(); ?>
    <section class="job-form-section job-form-section--image">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="job-form-box">
              <h2 class="heading">
                <span class="center-heading">FIND YOUR NEXT 
                </span>
                <span class="accent">PROJECT
                </span>
                <span class="accent">
                </span>
              </h2>
              <form id="job-main-form" method="get" action="#" class="job-main-form">
                <div class="controls">
                  <div class="row align-items-center">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="row">
                          <label for="profession" class='main-center-text'>
                            <b>Location:
                            </b>
                          </label>
                        </div>
                        <?php foreach ($dist_locations as $offer_row): ?>
                        <tr>
                      <button type="button" class="btn btn-info btn-sm btn-space btn-filter btn-rounded" data-target-location=
                              <?= $offer_row->location_data_name ?>>
                      <?= $offer_row->city ?>
                      </button>
                    </tr>
                  <?php endforeach;?>
                </div>
                </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row">
                    <label for="location" class='main-center-text'>
                      <b>Module:
                      </b>
                    </label>
                  </div>
                  <?php foreach ($dist_modules as $offer_row): ?>
                  <tr>
                <button type="button" class="btn btn-info btn-sm btn-space btn-filter btn-rounded" data-target-module=
                        <?= $offer_row->module_data_name; ?>>
                <?= $offer_row->module_desc ?>
                </button>
              </tr>
            <?php endforeach;?>
          </div>
        </div>
      </div>
      </div>
    </form>
  </div>
</div>
</div>
</div>
</section>
<section>
  <div class="container">
    <h3 class="heading" id="jobcounter">We have 
      <span class="accent">
        <?= $offer->count(); ?> 
      </span> active offers
    </h3>
    <table id="offertable" class="table table-bordered table-sm table-filter" cellspacing="0" width="100%">
      <thead style='display:none;'>
        <tr>
          <th>Offer
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($offer as $offer_row): ?>
        <tr data-location="<?= $offer_row->location_data_name ?>" data-module="<?= $module->find()->where(['module_desc' => $offer_row->module])->first()->module_data_name; ?>">
          <td class="border-<?= strtolower($offer_row->exp_type) ?>">
            <a href="users/jobdetails/<?= $offer_row->id ?>" class="nostyle">
              <h4 class="title">
                <?= $offer_row->job_title ?>
                <span class="pull-right">
                  <i class="fa fa-map-marker job__location"> 
                  </i> 
                  <?= $offer_row->country ?>, 
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
                            <?= $offer_row->job_type ?> 
                          </span>
                        </p>
                      </div>
                      <div class="col-lg-3">
                        <p class="featured__details">
                          <span class="label featured__label label-success">
                            <?= $offer_row->salary_from ?> - 
                            <?= $offer_row->salary_to ?> 
                            <?= $offer_row->salary_kind ?>
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
                        <p class="featured__details">
                          <span class="label featured__label label-success">Posted: 
                            <?= $offer_row->elapsed ?>
                          </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</section>

    
<?= $this->element('footer') ?>
    
    
<!-- JavaScript files-->
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js">
</script>
<script src="vendor/owl.carousel/owl.carousel.min.js">
</script>
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js">   </script>
<script src="js/tablefilters.js">
</script>
<script src="js/front.js">
</script>
<script src="/./js/scrolltop.js">
</script>
<a href="#" id="scroll" class="nostyle" style="display: none;">
  <span>
    </body>
  </html>