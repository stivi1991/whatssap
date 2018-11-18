<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 * @var \App\Model\Entity\PersonalInfo[]|\Cake\Collection\CollectionInterface $personalInfo
 */


 use Cake\Cache\Cache;
 use Cake\Core\Configure;
 use Cake\Core\Plugin;
 use Cake\Datasource\ConnectionManager;
 use Cake\Error\Debugger;
 use Cake\Network\Exception\NotFoundException;

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/core-img/favicon.ico">

    <!--preloader-->
    <?= $this->Html->css('/css/preloader.css"') ?>
    <?= $this->Html->css('/admin/assets/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/admin/assets/css/animate.min.css') ?>
    <?= $this->Html->css('/admin/assets/css/light-bootstrap-dashboard.css?v=1.4.0') ?>
    <?= $this->Html->css('/admin/assets/css/pe-icon-7-stroke.css') ?>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>

<body>

  <!-- Preloader Start -->
  <div id="preloader">
      <div class="colorlib-load"></div>
  </div>

  <script src="../js/preloader.js"></script>

  <?= $this->Flash->render() ?>

<div class="wrapper">
    <div class="sidebar" data-color="azure">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/admin/" class="simple-text">
                    <h7><img src="/img/logo.png" alt="logo" class="d-none d-lg-block"></h7><h8>ADMIN PANEL</h8>
                </a>
            </div>

            <ul class="nav">
                <li>
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
                        <i class="pe-7s-user"></i>
                        <p>Job offers</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/admin/maintain">
                        <i class="pe-7s-note2"></i>
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
            <div class="container-fluid">
              <ul class="nav">
            <li class="active">
                <a href="/admin/maintainmodule">
                    <button class="btn btn-outline-white-primary"></i>Add module</button>
                </a>
            </li>
          </ul>

          <div class="row">
                              <div class="col-md-12">
                                  <div class="card ">
                                      <div class="header">
                                          <h4 class="title">SAP Modules</h4>
                                      </div>
                                      <div class="content">
                                        <div class="content table-responsive table-full-width">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                  <th>ID</th>
                                                  <th>Module Description</th>
                                                  <th>Module Technical Name</th>
                                                </thead>
                                                <tbody>
                                                  <?php foreach ($module as $module): ?>
                                                   <tr>
                                                     <td><?= h($module->module_id) ?></td>
                                                     <td><?= h($module->module_desc) ?></td>
                                                     <td><?= h($module->module_data_name) ?></td>
                                                   </tr>
                                                 <?php endforeach;?>
                                                </tbody>
                                            </table>

                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>


              <ul class="nav">
            <li class="active">
                <a href="/admin/maintain">
                    <button class="btn btn-outline-white-primary"></i>Back</button>
                </a>
            </li>
          </ul>
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
<?= $this->Html->script('/admin/assets/js/jquery.3.2.1.min.js') ?>
<?= $this->Html->script('/js/preloader.js') ?>
<?= $this->Html->script('/admin/assets/js/bootstrap.min.js') ?>
<?= $this->Html->script('/admin/assets/js/chartist.min.js') ?>
<?= $this->Html->script('/admin/assets/js/bootstrap-notify.js') ?>
<?= $this->Html->script('/admin/assets/js/light-bootstrap-dashboard.js?v=1.4.0') ?>

</html>
