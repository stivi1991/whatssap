<?php

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
  <?= $this->Html->css('/style.css') ?>

      <meta charset="UTF-8">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

      <!-- Title -->
      <title>What's SAP</title>
      <?= $this->Form->create('User'); ?>

      <!-- Favicon -->
      <link rel="icon" href="img/core-img/favicon.ico">

</head>

<body>
                                                                
                                <?= $this->Form->control('name_first', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'First Name *','value'=>'')); ?>

                                <?= $this->Form->control('name_last', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Last Name *','value'=>'')); ?>

                                <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'password','placeholder'=>'Password *','value'=>'')); ?>

                                <?= $this->Form->control('password_confirm', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'password','placeholder'=>'Confirm password *','value'=>'')); ?>

                                <?= $this->Form->control('email', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Email *','value'=>'')); ?>

                        <?php echo $this->Form->submit('Register!'); ?>
                        <?php echo $this->Form->end(); ?>


    <?= $this->Html->script('/js/active.js') ?>

</body>

</html>
