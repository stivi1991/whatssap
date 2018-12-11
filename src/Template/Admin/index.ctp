<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/./favicon.ico">
    <title>Admin Panel</title>

    <!--preloader-->
    <?= $this->Html->css('/./css/preloader.css') ?>
    <?= $this->Html->css('/./admin/assets/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/./admin/assets/css/animate.min.css') ?>
    <?= $this->Html->css('/./admin/assets/css/light-bootstrap-dashboard.css?v=1.4.0') ?>
    <?= $this->Html->css('/./admin/assets/css/pe-icon-7-stroke.css') ?>
    <?= $this->Html->css('/./admin/assets/css/messages.css') ?>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>

<body>

  <!-- Preloader Start -->
  <div id="preloader">
      <div class="colorlib-load"></div>
  </div>

  <script src="/./js/preloader.js"></script>

  <?= $this->Flash->render() ?>

<div class="wrapper">
    <div class="sidebar" data-color="azure">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/admin/" class="simple-text">
                    <h7><img src="/./img/logo.png" alt="logo" class="d-none d-lg-block"></h7><h8>ADMIN PANEL</h8>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/admin/">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/userlist">
                        <i class="pe-7s-user"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/offers">
                        <i class="pe-7s-id"></i>
                        <p>Job offers</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/maintain">
                        <i class="pe-7s-settings"></i>
                        <p>Selection data</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">Admin panel</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                              <?= $this->Html->link(__('Logout'), ['action' => 'logout']) ?>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users</h4>
                            </div>
                            <div class="content">

                            <p class="category">Total</p>
                            <h5><?= $users->count(); ?></h5>

                            <p class="category">Candidates</p>
                            <p class="text-success"><?= $candidates->count(); ?></pl>

                            <p class="category">Basic Employers</p>
                            <p class="text-success"><?= $employers_basic->count(); ?></pl>

                            <p class="category">Standard Employers</p>
                            <p class="text-danger"><?= $employers_standard->count(); ?></pl>

                            <p class="category">Premium Employers</p>
                            <p class="text-danger"><?= $employers_premium->count(); ?></pl>

                            </div>
                        </div>
                    </div>

<div class="row">
                      <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Job offers</h4>
                            </div>
                            <div class="content">

                              <p class="category">Total</p>
                              <h5>???</h5>

                              <p class="category">Active</p>
                              <p class="text-success">???</pl>

                              <p class="category">Expired</p>
                              <p class="text-danger">???</pl>

                              <p class="category">&nbsp;</p>
                              <p class="text-danger">&nbsp;</pl>
                              
                              <p class="category">&nbsp;</p>
                              <p class="text-danger">&nbsp;</pl>
  
                            </div>
                        </div>
                    </div>
</div>

<div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Candidates</h4>
                                <p class="category">Last 10 registered</p>
                            </div>
                            <div class="content">
                              <div class="content table-responsive table-full-width">
                                  <table class="table table-hover table-striped">
                                      <thead>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>City</th>
                                        <th>Address</th>
                                      </thead>
                                      <tbody>
                                        <?php foreach ($candidates10 as $user): ?>
                                         <tr>
                                           <td><?= h($user->id) ?></td>
                                           <td><?= h($user->email) ?></td>
                                           <td><?= h($info->get($user->id)->name_first) ?></td>
                                           <td><?= h($info->get($user->id)->name_last) ?></td>
                                           <td><?= h($info->get($user->id)->city) ?></td>
                                           <td><?= h($info->get($user->id)->address) ?></td>
                                         </tr>
                                       <?php endforeach;?>
                                      </tbody>
                                  </table>

                                </div>
                            </div>
                        </div>
                    </div>
</div>

<div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Employers</h4>
                                <p class="category">Last 10 registered</p>
                            </div>
                            <div class="content">
                              <div class="content table-responsive table-full-width">
                                  <table class="table table-hover table-striped">
                                      <thead>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Company Name</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Address</th>
                                      </thead>
                                      <tbody>
                                        <?php foreach ($candidates10 as $user): ?>
                                         <tr>
                                           <td><?= h($user->id) ?></td>
                                           <td><?= h($user->email) ?></td>
                                           <td><?= h($info->get($user->id)->name_first) ?></td>
                                           <td><?= h($info->get($user->id)->name_last) ?></td>
                                           <td><?= h($info->get($user->id)->city) ?></td>
                                           <td><?= h($info->get($user->id)->address) ?></td>
                                         </tr>
                                       <?php endforeach;?>
                                      </tbody>
                                  </table>

                                </div>
                            </div>
                        </div>
                    </div>
</div>

                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card ">
                                            <div class="header">
                                                <h4 class="title">Job offers</h4>
                                                <p class="category">Last 10 posted</p>
                                            </div>
                                            <div class="content">
                                              <div class="content table-responsive table-full-width">
                                                  <table class="table table-hover table-striped">
                                                      <thead>
                                                        <th>ID</th>
                                                        <th>Job title</th>
                                                        <th>Module</th>
                                                        <th>Company Name</th>
                                                        <th>Expertise Level</th>
                                                        <th>Applying email</th>
                                                      </thead>
                                                      <tbody>
                                       <?php foreach ($offers10 as $offer): ?>
                                         <tr>
                                           <td><?= h($offer->id) ?></td>
                                           <td><?= h($offer->job_title) ?></td>
                                           <td><?= h($offer->module) ?></td>
                                           <td><?= h($offer->company_name) ?></td>
                                           <td><?= h($offer->exp_type) ?></td>
                                           <td><?= h($offer->apply_email) ?></td>
                                         </tr>
                                       <?php endforeach;?>

                                                      </tbody>
                                                  </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


            </div>
        </div>
    </div>

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


</body>
<?= $this->Html->script('/./admin/assets/js/jquery.3.2.1.min.js') ?>
<?= $this->Html->script('/./js/preloader.js') ?>
<?= $this->Html->script('/./admin/assets/js/bootstrap.min.js') ?>
<?= $this->Html->script('/./admin/assets/js/chartist.min.js') ?>
<?= $this->Html->script('/./admin/assets/js/bootstrap-notify.js') ?>
<?= $this->Html->script('/./admin/assets/js/light-bootstrap-dashboard.js?v=1.4.0') ?>

</html>
