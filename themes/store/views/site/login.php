<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Masuk';
$this->breadcrumbs=array(
	'Login',
  );
  ?>

  <section id="inner-banner">
    <div class="container">
      <h1>DINAS TENAGA KERJA</h1>
    </div>
  </section>


  <div id="main">

    <section class="signup-section">
      <div class="container">
        <div class="holder">
          <div><img src="images/kab_bandung.png" alt="img" style="width: 200px"></div>
          <BR>
          <BR>
          <BR>
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

              <?php echo $form->error($model,'username'); ?>
             <div class="input-box"> <i class="fa fa-user"></i>
              <?php echo $form->textField($model,'username', array('class' => 'form-control', 'placeholder'=>'Username')); ?>
            </div>

             <?php echo $form->error($model,'password'); ?>
            <div class="input-box"><i class="fa fa-lock"></i>
             <?php echo $form->passwordField($model,'password', array('class' => 'form-control','placeholder'=>'Password')); ?>
           </div>

           <input type="submit" class="btn btn-block btn-info" value="Masuk">

           <?php $this->endWidget(); ?>  

         </div>
       </div>
     </section>

   </div>


<SCRIPT>
jQuery(document).ready(function(){
  jQuery("#LoginForm_username").keyup(function(event){
    if(event.keyCode == 13){
      jQuery("#LoginForm_password").focus();
    }
  });
  
  jQuery("#LoginForm_password").keyup(function(event){   
    if(event.keyCode == 13){      
      jQuery('#frm').submit();
    }
  });
});
</script>