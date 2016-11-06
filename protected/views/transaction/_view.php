<?php
/* @var $this TransactionController */
/* @var $data Transaction */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_transaction), array('view', 'id'=>$data->id_transaction)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_order')); ?>:</b>
	<?php echo CHtml::encode($data->date_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_confirmation')); ?>:</b>
	<?php echo CHtml::encode($data->date_confirmation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_verification')); ?>:</b>
	<?php echo CHtml::encode($data->date_verification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('confirmation_id')); ?>:</b>
	<?php echo CHtml::encode($data->confirmation_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('verification_id')); ?>:</b>
	<?php echo CHtml::encode($data->verification_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_method')); ?>:</b>
	<?php echo CHtml::encode($data->payment_method); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_total')); ?>:</b>
	<?php echo CHtml::encode($data->payment_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_file')); ?>:</b>
	<?php echo CHtml::encode($data->payment_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_type')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_brand')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_brand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_code')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>
        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
