<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Masuk';
$this->breadcrumbs=array(
	'Login',
  );
  ?>

  <div class="center-content">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <section class="panel panel-default">
          <header class="panel-heading">Sign in</header>
          <div class="bg-white user pd-md">
            <?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'login-form',
              'enableAjaxValidation'=>false,
              'enableClientValidation' => true,
              'clientOptions' => array(
                'validateOnSubmit' => true,
                ),
              'errorMessageCssClass' => 'label label-success',
              'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
              )); ?>

              <?php echo $form->textField($model,'username', array('class' => 'form-control mg-b-sm', 'placeholder'=>'Username','autofocus'=>true)); ?>
              <?php echo $form->passwordField($model,'password', array('class' => 'form-control','placeholder'=>'Password')); ?>
              <HR>
                <button class="btn btn-info btn-block" type="submit">Sign in</button>
                <?php $this->endWidget(); ?>  
              </div>
            </section>
          </div>
        </div>
      </div>
