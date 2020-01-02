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
        <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/./css/scrolltop.css">
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
    
<?= $this->element('header') ?>

    <section class="job-form-section job-form-section--image">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <div class="job-form-box">
              <h2 class="heading">
                <span class="center-heading">ADD NEW 
                </span>
                <span class="accent">JOB OFFER
                </span>
                <span class="accent">
                </span>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Detailed information box !-->
<form method="post" action="/employer/postjob" class="job-add-form">
    <section>
      <div class="container">
        <div class="row">
          <div class="job-detail-description">
            General information
          </div>
        </div>
            <div class="box box_title effect6">
              <div class="row">
                <div class="col-lg-12 form-group">
                  <label for="job_title" class="thinfont labelclose smaller-font">Job title:
                  </label>
                  <input id="job_title" type="text" placeholder="JOB TITLE" name="job_title" class="form-control capitalfont" autocomplete="off" required />
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 form-group">
                  <label for="function" class="thinfont labelclose smaller-font">Function:
                  </label>
                  <select id="function" name="function" class="form-control select2" required>
                    <option disabled selected hidden>Function
                    </option>  
                    <?php
foreach ($func as $func):
?>
                    <option>
                      <?= h($func->func_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
                <div class="col-lg-4 form-group">
                  <label for="module" class="thinfont labelclose smaller-font">Module:
                  </label>
                  <select id="module" name="module" class="form-control select2" required>
                    <option disabled selected hidden>SAP Module
                    </option>
                    <?php
foreach ($modules as $module):
?>
                    <option>
                      <?= h($module->module_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
                <div class="col-xl-4 form-group">
                  <label for="exp_type" class="thinfont labelclose smaller-font">Level of expertise:
                  </label>
                  <select id="exp_type" placeholder="Level of expertise" name="exp_type" class="form-control select2 capitalfont" required>
                    <option disabled selected hidden>Level of expertise
                    </option>
                    <?php
foreach ($exp_levels as $exp_level):
?>
                    <option>
                      <?= h($exp_level->level_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 form-group">
                  <label for="country" class="thinfont labelclose smaller-font">Country:
                  </label>
                  <select id="country" name="country" class="form-control select2" required>
                    <option disabled selected hidden>Country
                    </option>
                    <?php
foreach ($countries as $country):
?>
                    <option>
                      <?= h($country->country_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
                <div class="col-lg-4 form-group">
                  <label for="city" class="thinfont labelclose smaller-font">City:
                  </label>
                  <input id="city" type="text" name="city" placeholder="City" minlength="2" maxlength="20" oninvalid="setCustomValidity('City name must be shorter than 20 and longer than 1 character.')" class="form-control capitalfont" autocomplete="off" required />
                </div>
                <div class="col-xl-4 form-group">
                  <label for="job_type" class="thinfont labelclose smaller-font">Type of contract:
                  </label>
                  <select id="job_type" placeholder="type" name="job_type" class="form-control select2" required>
                    <option disabled selected hidden>Type of contract
                    </option>
                    <?php
foreach ($job_types as $job_type):
?>
                    <option>
                      <?= h($job_type->type_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
              </div>
            </div>
            <!--  Detailed information box !-->
            <div class="row">
              <div class="job-detail-description">
                Detailed information
              </div>
            </div>
            <div class="box box_title effect7">
              <div class="row">
                <div class="col-xl-3 form-group">
                  <label for="salary_from" class="thinfont labelclose smaller-font">Salary from:
                  </label>
                  <input id="salary_from" type="number" min="1" name="salary_from" placeholder="Salary from" oninvalid="setCustomValidity('Enter an amount')" class="form-control capitalfont" autocomplete="off" required>
                </div>
                <div class="col-xl-3 form-group">
                  <label for="salary_to" class="thinfont labelclose smaller-font">Salary to:
                  </label>
                  <input id="salary_to" type="number" min="1" name="salary_to" placeholder="Salary to" oninvalid="setCustomValidity('Enter an amount')" class="form-control capitalfont" autocomplete="off">
                </div>
                <div class="col-xl-2 form-group">
                  <label for="currency" class="thinfont labelclose smaller-font">Currency:
                  </label>
                  <select id="currency" type="text" placeholder="Currency:" name="currency" class="form-control select2" required>
                    <option disabled selected hidden>Currency
                    </option>
                    <?php
foreach ($salary_currs as $salary_curr):
?>
                    <option>
                      <?= h($salary_curr->curr_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
                <div class="col-xl-2 form-group">
                  <label for="salary_type" class="thinfont labelclose smaller-font">Per:
                  </label>
                  <select id="salary_type" placeholder="Salary per:" name="salary_type" class="form-control select2" required>
                    <option disabled selected hidden>Per
                    </option>
                    <?php
foreach ($salary_pers as $salary_per):
?>
                    <option>
                      <?= h($salary_per->per_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
                <div class="col-xl-2 form-group">
                  <label for="salary_kind" class="thinfont labelclose smaller-font">Kind:
                  </label>
                  <select id="salary_kind" placeholder="Kind" name="salary_kind" class="form-control select2" required>
                    <option disabled selected hidden>Kind
                    </option>
                    <?php
foreach ($salary_kinds as $salary_kind):
?>
                    <option>
                      <?= h($salary_kind->kind_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-4 form-group">
                  <label for="occupancy" class="thinfont labelclose smaller-font">Occupancy:
                  </label>
                  <select id="occupancy" data-placeholder="Mobility" name="occupancy" class="form-control select2" required>
                    <option disabled selected hidden>Occupancy
                    </option>
                    <?php
foreach ($occupancies as $occupancy):
?>
                    <option>
                      <?= h($occupancy->occu_desc) ?>
                    </option>
                    <?php
endforeach;
?>
                  </select>
                </div>
                <div class="col-xl-4 form-group">
                  <label for="project_start" class="thinfont labelclose smaller-font">Expected start date:
                  </label>
                  <input id="project_start" name="project_start" type="text" class="form-control" autocomplete="off" required />
                </div>
                <div class="col-xl-4 form-group">
                  <label id="dura" for="duration" class="thinfont labelclose smaller-font" style="display:none;">Expected duration in months:
                  </label>
                  <fieldset style="display:none;">
                  <input id="month-1" class="radio-inline__input" type="radio" name="duration" value="1" checked="checked"/>
                  <label class="radio-inline__label" for="month-1">
                    1
                  </label>
                  <input id="month-3" class="radio-inline__input" type="radio" name="duration" value="3"/>
                  <label class="radio-inline__label" for="month-3">
                    3
                  </label>
                 <input id="month-6" class="radio-inline__input" type="radio" name="duration" value="6"/>
                 <label class="radio-inline__label" for="month-6">
                    6
                 </label>
                    <input id="month-12" class="radio-inline__input" type="radio" name="duration" value="12"/>
                 <label class="radio-inline__label" for="month-12">
                    12
                 </label>
                    <input id="month-18" class="radio-inline__input" type="radio" name="duration" value="18"/>
                 <label class="radio-inline__label" for="month-18">
                    18
                 </label>
                    <input id="month-24" class="radio-inline__input" type="radio" name="duration" value="24"/>
                 <label class="radio-inline__label" for="month-24">
                    24
                 </label>
                 <input id="month-more" class="radio-inline__input" type="radio" name="duration" value="More than 24"/>
                 <label class="radio-inline__label" for="month-more">
                    More
                 </label>
                 <input id="month-perm" class="radio-inline__input" type="radio" name="duration" value="Permanent" hidden/>
                </fieldset>
                </div>
                </div>
              </div>
              <div class="row">
              </div>
            <!--  Description box !-->
            <div class="row">
              <div class="job-detail-description">
                Description
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row">
                <div class="box box_title effect9">
                  <div class="form-group noborder">
                    <textarea id="description" name="description" rows="20" minlength="10" maxlength="5000" 
                              oninvalid="setCustomValidity('Description cannot be longer than 5000 characters and shorter than 10 characters.')" class="form-control noborder" autocomplete="off" required></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!--  Company info box !-->
            <div class="row">
              <div class="job-detail-description">
                Company information
              </div>
            </div>
          <div class="col-lg-12">
              <div class="row">
                <div class="box box_title effect8">
                  <div class="row">
                    <div class="col-lg-6 form-group">
                      <label for="company_name" class="thinfont labelclose smaller-font">Company name:
                      </label>
                      <input id="company_name" name="company_name" type="text" class="form-control" required />
                    </div>
                    <div class="col-lg-6 form-group">
                      <label for="apply_email" class="thinfont labelclose  smaller-font">
                        Applying email:<div class="question-mark email">
                        <div class="tooltip">
                        <p>When a candidate applies for this offer, you will receive his request on this email address. You will also receive an invoice here.</p>
                        </div><span style="padding-bottom:2px;">?</span></div>
                      </label>
                      <input id="apply_email" name="apply_email" type="email" oninvalid="setCustomValidity('Enter a vaild email address')" class="form-control" required />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4 form-group">
                      <label for="company_url" class="thinfont labelclose smaller-font">Website 
                        <i class="fa fa-globe">
                        </i>
                      </label>        
                        <input id="company_url" name="company_url" type="url"  oninvalid="setCustomValidity('Enter an address with http:// or https://')" class="form-control" />
                    </div>
                    <div class="col-lg-4 form-group">
                      <label for="company_facebook" class="thinfont labelclose smaller-font">Facebook 
                        <i class="fa fa-facebook">
                        </i>
                      </label>
                      <input id="company_facebook" name="company_facebook" type="url" oninvalid="setCustomValidity('Enter an address with http:// or https://')" class="form-control" />
                    </div>
                    <div class="col-lg-4 form-group">
                      <label for="company_linkedin" class="thinfont labelclose smaller-font">LinkedIn 
                        <i class="fa fa-linkedin">
                        </i>
                      </label>
                      <input id="company_linkedin" name="company_linkedin" type="url" oninvalid="setCustomValidity('Enter an address with http:// or https://')" class="form-control" />
                    </div>
                </div>
              </div>
            </div>
        </div>
          <!--  Agree and submit !-->
          <div class="row">
            <div class="col-lg-12">
              <hr>
              <div class="checkbox text-center">
                <div class="job-detail-description">
                  <input type="checkbox" required /> I agree with the 
                  <a href="#" data-toggle="modal" data-target="#terms-modal" id="modal">Terms and conditions
                  </a>.
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 text-center">
              <hr>
                <?= $this->Form->submit(__('POST IT'), array('class' => 'btn navbar-btn btn-outline-light mb-5 mb-lg-0')); ?>
                <?= $this->Form->end() ?>
            </div>
          </div>
      </div>
      </div>
    </section>

    <!-- *** PAYMENT INFO MODAL END ***-->
    
<?= $this->element('footer') ?>
    
    
<!-- JavaScript files-->
<script src="/./vendor/jquery/jquery.min.js">
</script>
<script src="/./vendor/popper.js/umd/popper.min.js">
</script>
<script src="/./vendor/bootstrap/js/bootstrap.min.js">
</script>
<script src="/./vendor/jquery.cookie/jquery.cookie.js">
</script>
<script src="/./vendor/owl.carousel/owl.carousel.min.js">
</script>
<script src="/./vendor/bootstrap-select/js/bootstrap-select.min.js">
</script>
<script src="/./js/front.js">
</script>
<script src="/./js/tooltipdisabler.js">
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
 $(document).ready(function () {
 $( "#project_start" ).datepicker({ dateFormat: 'yy-mm-dd', minDate : 0 });
 });
</script>
<script src="/./js/scrolltop.js">
</script>
<a href="#" id="scroll" class="nostyle" style="display: none;">
  <span>
</body>
</html>