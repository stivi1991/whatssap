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

    <?= $this->Html->css('/admin/assets/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/admin/assets/css/animate.min.css') ?>
    <?= $this->Html->css('/admin/assets/css/light-bootstrap-dashboard.css?v=1.4.0') ?>
    <?= $this->Html->css('/admin/assets/css/pe-icon-7-stroke.css') ?>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

</head>

<body>

  <div class="wrapper">
      <div class="sidebar" data-color="purple">

      <!--

          Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
          Tip 2: you can also add an image using data-image tag

      -->

      	<div class="sidebar-wrapper">
              <div class="logo">
                  <a href="/" class="simple-text">
                      <h7>plik</h7><h8>.me ADMIN</h8>
                  </a>
              </div>

              <ul class="nav">
                  <li class="active">
                      <a href="#">
                          <i class="pe-7s-graph"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/userlist">
                          <i class="pe-7s-user"></i>
                          <p>Użytkownicy</p>
                      </a>
                  </li>
                  <li>
                      <a href="/admin/transactions">
                          <i class="pe-7s-note2"></i>
                          <p>Transakcje</p>
                      </a>
                  </li>
              </ul>
      	</div>
      </div>

      <div class="main-panel">
          <nav class="navbar navbar-default navbar-fixed">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <a class="navbar-brand">Panel administratora</a>
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
                                <?= $this->Html->link(__('Wyloguj'), ['action' => 'logout']) ?>
                          </li>
  						<li class="separator hidden-lg"></li>
                      </ul>
                  </div>
              </div>
          </nav>

<div class="content">
              <div class="container-fluid">
                  <div class="row">

<p>
  <a href ="/admin/userlist"> << Powrót </a>
</p>

<div class="col-md-12">

  <p><?= h($user->id) ?></p>
  <p><?= h($user->email) ?></p>
  <p><?= h($info->get($user->id)->name_first) ?><p>
  <p><?= h($info->get($user->id)->name_last) ?></p>
  <p><?= h($info->get($user->id)->city) ?></p>
  <p><?= h($info->get($user->id)->address) ?></p>
  <p><?php if($user->role == 'CUST_VERIFIED'){
    echo 'Zweryfikowany';
  } else {
    echo 'Niezweryfikowany';
  } ?></p>

</div>
</div>
</div>
</div>
</div>
</div>

<!-- ***** Footer Area Start ***** -->
<footer class="footer-social-icon text-center section_padding_70 clearfix">
    <!-- footer logo -->
    <div class="footer-text" "center">
        <h2>plik.me</h2>
    <!-- Foooter Text-->
    <div class="copyright-text">
        <!-- ***** Removing this text is now allowed! This template is licensed under CC BY 3.0 ***** -->
        <p>Copyright ©2018 <a href="/" target="_blank">plik.me</a></p>
    </div>
</footer>
<!-- ***** Footer Area Start ***** -->

</body>

<?= $this->Html->script('/admin/assets/js/jquery.3.2.1.min.js') ?>
<?= $this->Html->script('/admin/assets/js/bootstrap.min.js') ?>
<?= $this->Html->script('/admin/assets/js/chartist.min.js') ?>
<?= $this->Html->script('/admin/assets/js/bootstrap-notify.js') ?>
<?= $this->Html->script('/admin/assets/js/light-bootstrap-dashboard.js?v=1.4.0') ?>
<?= $this->Html->script('/admin/assets/js/demo.js') ?>

</html>
