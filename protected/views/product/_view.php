<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="col-xs-6">
	<!-- Default box -->
	<div class="box box-solid">
		<div class="box-header">
			<h3 class="box-title">

					<?php echo CHtml::link(CHtml::encode($data->id_product), array('view', 'id'=>$data->id_product)); ?>
	<br />

				
			</div>
			<div class="box-body">

					<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_category_id')); ?>:</b>
	<?php echo CHtml::encode($data->sub_category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spesification')); ?>:</b>
	<?php echo CHtml::encode($data->spesification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand_id')); ?>:</b>
	<?php echo CHtml::encode($data->brand_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('views')); ?>:</b>
	<?php echo CHtml::encode($data->views); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('likes')); ?>:</b>
	<?php echo CHtml::encode($data->likes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discount')); ?>:</b>
	<?php echo CHtml::encode($data->discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_id')); ?>:</b>
	<?php echo CHtml::encode($data->created_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyword')); ?>:</b>
	<?php echo CHtml::encode($data->keyword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abstrack')); ?>:</b>
	<?php echo CHtml::encode($data->abstrack); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sales')); ?>:</b>
	<?php echo CHtml::encode($data->sales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate')); ?>:</b>
	<?php echo CHtml::encode($data->rate); ?>
	<br />

	*/ ?>
        

			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
