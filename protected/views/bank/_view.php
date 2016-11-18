<?php
/* @var $this BankController */
/* @var $data Bank */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

				<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id_bank)); ?>
				<br />

				
			</div>
			<div class="box-body">

				<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
				<?php echo CHtml::encode($data->name); ?>
				<br />

				<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
				<?php echo CHtml::encode($data->code); ?>
				<br />

				


</div><!-- /.box-body -->
</div><!-- /.box -->
</div>
