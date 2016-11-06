<?php
/* @var $this TransactionController */
/* @var $model Transaction */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_transaction'); ?>
		<?php echo $form->textField($model,'id_transaction'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_order'); ?>
		<?php echo $form->textField($model,'date_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_confirmation'); ?>
		<?php echo $form->textField($model,'date_confirmation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_verification'); ?>
		<?php echo $form->textField($model,'date_verification'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'confirmation_id'); ?>
		<?php echo $form->textField($model,'confirmation_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'verification_id'); ?>
		<?php echo $form->textField($model,'verification_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_method'); ?>
		<?php echo $form->textField($model,'payment_method'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_total'); ?>
		<?php echo $form->textField($model,'payment_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_file'); ?>
		<?php echo $form->textField($model,'payment_file',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_type'); ?>
		<?php echo $form->textField($model,'shipping_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_brand'); ?>
		<?php echo $form->textField($model,'shipping_brand'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_code'); ?>
		<?php echo $form->textField($model,'shipping_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->