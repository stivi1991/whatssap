<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container">
  <div class="col-10 col-md-3 col-lg-2 ml-auto">
    <div class="row">
      <div class="col-4">
        <?= $this->Flash->render('auth'); ?>
        <?= $this->Form->create('User', array('url'=>array('controller'=>'users', 'action'=>'login'))); ?>
          <div class="form-group">
            <?= $this->Form->control('email' , array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Email','value'=>'')) ?>
          </div>
          <div class="form-group">
            <?= $this->Form->control('password', array('div'=>false,'label'=>false,'class'=>'form-control', 'type'=>'text','placeholder'=>'Password','value'=>'')) ?>
          </div>
          <p class="text-center">
            <center>
            <?= $this->Form->submit(__('Login'), array('class' => 'btn btn-outline-white-primary')); ?>
            <?= $this->Form->end() ?>
          </center>
          </p>
        <p class="text-center text-muted">Not registered yet?</p>
        <p class="text-center text-muted"><a href="client-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
</div>
</div>
</div>
</div>
