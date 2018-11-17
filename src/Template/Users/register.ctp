<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Jobs - Bootstrap 4 template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
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
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





        <style type="text/css">
            body {
                color: #404E67;
                background: #F5F7FA;
        		font-family: 'Open Sans', sans-serif;
        	}
        	.table-wrapper {
        		width: 700px;
        		margin: 30px auto;
                background: #fff;
                padding: 20px;
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            .table-title {
                padding-bottom: 10px;
                margin: 0 0 10px;
            }
            .table-title h2 {
                margin: 6px 0 0;
                font-size: 22px;
            }
            .table-title .add-new {
                float: right;
        		height: 30px;
        		font-weight: bold;
        		font-size: 12px;
        		text-shadow: none;
        		min-width: 100px;
        		border-radius: 50px;
        		line-height: 13px;
            }
        	.table-title .add-new i {
        		margin-right: 4px;
        	}
            table.table {
                table-layout: fixed;
            }
            table.table tr th, table.table tr td {
                border-color: #e9e9e9;
            }
            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }
            table.table th:last-child {
                width: 100px;
            }
            table.table td a {
        		cursor: pointer;
                display: inline-block;
                margin: 0 5px;
        		min-width: 24px;
            }
        	table.table td a.add {
                color: #27C46B;
            }
            table.table td a.edit {
                color: #FFC107;
            }
            table.table td a.delete {
                color: #E34724;
            }
            table.table td i {
                font-size: 19px;
            }
        	table.table td a.add i {
                font-size: 24px;
            	margin-right: -1px;
                position: relative;
                top: 3px;
            }
            table.table .form-control {
                height: 32px;
                line-height: 32px;
                box-shadow: none;
                border-radius: 2px;
            }
        	table.table .form-control.error {
        		border-color: #f50000;
        	}
        	table.table td .add {
        		display: none;
        	}
        </style>

        <style type='text/css'>

        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        fieldset, label { margin: 0; padding: 0; }
        body{ margin: 20px; }
        h1 { font-size: 1.5em; margin: 10px; }

        /****** Style Star Rating Widget *****/

        .rating {
          border: none;
          float: left;
        }

        .rating > input { display: none; }
        .rating > label:before {
          margin: 5px;
          font-size: 1.25em;
          font-family: FontAwesome;
          display: inline-block;
          content: "\f005";
        }

        .rating > .half:before {
          content: "\f089";
          position: absolute;
        }

        .rating > label {
          color: #ddd;
         float: right;
        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .rating > input:checked ~ label, /* show gold star when clicked */
        .rating:not(:checked) > label:hover, /* hover current star */
        .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

        .rating > input:checked + label:hover, /* hover current star when changing rating */
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
        .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }

        </style>
        <script type="text/javascript">
        $(document).ready(function(){
          var skillnum = 1;
        	$('[data-toggle="tooltip"]').tooltip();
        	var actions = '<a class="add" title="Add"><i class="material-icons">&#xE03B;</i></a>' +
                        '<a class="delete"><i class="material-icons">&#xE872;</i></a>';
        	// Append table with add row form on add new button click
            $(".add-new").click(function(){
        		$(this).attr("disabled", "disabled");
        		var index = $("table tbody tr:last-child").index();
                skillnum += 1;
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="skill_name" id="skill_name" required></td>' +
                    '<td>' +
                    '<fieldset class="rating">' +
              '<input type="radio" id="' + skillnum + '_' + 'star5" name="' + skillnum + '_' + 'rating" value="5" /><label class = "full" for="' + skillnum + '_' + 'star5" title="Expert"></label>' +
              '<input type="radio" id="' + skillnum + '_' + 'star4half" name="' + skillnum + '_' + 'rating" value="4 and a half" /><label class="half" for="' + skillnum + '_' + 'star4half" title="Expert"></label>' +
              '<input type="radio" id="' + skillnum + '_' + 'star4" name="' + skillnum + '_' + 'rating" value="4" /><label class = "full" for="' + skillnum + '_' + 'star4" title="Senior"></label>' +
              '<input type="radio" id="' + skillnum + '_' + 'star3half" name="' + skillnum + '_' + 'rating" value="3 and a half" /><label class="half" for="' + skillnum + '_' + 'star3half" title="Senior"></label>' +
              '<input type="radio" id="' + skillnum + '_' + 'star3" name="' + skillnum + '_' + 'rating" value="3" /><label class = "full" for="' + skillnum + '_' + 'star3" title="Regular"></label>' +
              '<input type="radio" id="' + skillnum + '_' + 'star2half" name="' + skillnum + '_' + 'rating" value="2 and a half" /><label class="half" for="' + skillnum + '_' + 'star2half" title="Regular"></label>' +
              '<input type="radio" id="' + skillnum + '_' + 'star2" name="' + skillnum + '_' + 'rating" value="2" /><label class = "full" for="' + skillnum + '_' + 'star2" title="Junior"></label>' +
              '<input type="radio" id="' + skillnum + '_' + 'star1half" name="' + skillnum + '_' + 'rating" value="1 and a half" /><label class="half" for="' + skillnum + '_' + 'star1half" title="Junior"></label>' +
              '<input type="radio" id="' + skillnum + '_' + 'star1" name="' + skillnum + '_' + 'rating" value="1" /><label class = "full" for="' + skillnum + '_' + 'star1" title="Juniorr"></label>' +
              '<input type="radio" id="' + skillnum + '_' + 'starhalf" name="' + skillnum + '_' + 'rating" value="half" /><label class="half" for="' + skillnum + '_' + 'starhalf" title="Junior"></label>' +
              '</fieldset>' +
                    '</td>' +
        			'<td>' + actions + '</td>' +
                '</tr>';
            	$("table").append(row);
        		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('[data-toggle="tooltip"]').tooltip();
            });
        	// Add row on add button click
        	$(document).on("click", ".add", function(){
        		var empty = false;
        		var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function(){
        			if(!$(this).val()){
        				$(this).addClass("error");
        				empty = true;
        			} else{
                        $(this).removeClass("error");
                    }
        		});
        		$(this).parents("tr").find(".error").first().focus();
        		if(!empty){
        			input.each(function(){
        				$(this).parent("td").html($(this).val());
        			});
        			$(this).parents("tr").find(".add, .edit").toggle();
        			$(".add-new").removeAttr("disabled");
        		}
            });
        	// Delete row on delete button click
        	$(document).on("click", ".delete", function(){
                $(this).parents("tr").remove();
        		$(".add-new").removeAttr("disabled");
            });
        });
        </script>



  </head>
  <body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="/" class="navbar-brand"><img src="/img/logo.png" alt="logo" class="d-none d-lg-block"><img src="img/logo-small.png" alt="logo" class="d-block d-lg-none"><span class="sr-only">Go to homepage</span></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/users/jobsearch" class="nav-link">Job offers<span class="sr-only">(current)</span></a></li>
              <li class="nav-item"><a href="about.html" class="nav-link">Who are we?</a></li>
              <li class="nav-item dropdown"><a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">For Employers</a>
                <div aria-labelledby="pages" class="dropdown-menu"><a href="#" data-toggle="modal" data-target="#login-modal-employer" class="dropdown-item">Login or Register</a><a href="#pricing" class="dropdown-item">Pricing</a><a href="/employer/postjob" class="dropdown-item">Post a job</a></div>
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
                <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'password','placeholder'=>'Password','value'=>'')) ?>
              </div>
              <p class="text-center">
                <center>
                <?= $this->Form->submit(__('Login'), array('class' => 'btn btn-outline-white-primary')); ?>
                <?= $this->Form->end() ?>
              </center>
              </p>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="/users/register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
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
                <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'password','placeholder'=>'Password','value'=>'')) ?>
              </div>
              <p class="text-center">
                <center>
                <?= $this->Form->submit(__('Login'), array('class' => 'btn btn-outline-white-primary')); ?>
                <?= $this->Form->end() ?>
              </center>
              </p>
            <p class="text-center text-muted">Not registered yet?</p>
            <p class="text-center text-muted"><a href="/employer/register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->







    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <h3 class="heading">New candidate account</h3>
              <hr>
              <form action="/users/register" method="post">
                <div class="form-group">
                  <label for="name_first">First Name</label>
                  <input id="name_first" name="name_first" type="text" class="form-control" required />
                </div>
                <div class="form-group">
                  <label for="name_last">Last Name</label>
                  <input id="name_last" name="name_last" type="text" class="form-control" required />
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input id="email" name="email" type="email" class="form-control" required />
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input id="password" type="password" name="password" class="form-control" required />
                </div>
                <div class="form-group">
                  <label for="password_confirm">Confirm password</label>
                  <input id="password_confirm" type="password" name="password_confirm" class="form-control" required />
                </div>
                <div class="form-group">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8"><h5>Skills</h5></div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Skill name</th>
                                    <th>Level</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <h3 class="heading">Login</h3>
              <p class="lead">Already have an account? Login!</p>
              <hr>
              <form action="client-dashboard.html" method="post">
                <div class="form-group">
                  <label for="email">Email</label>
                </div>
                <input id="email" type="text" class="form-control">
              </form>
              <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper.js/umd/popper.min.js"> </script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../vendor/bootstrap-select/js/bootstrap-select.min.js">   </script>
    <script src="../js/front.js"></script>
  </body>
</html>
