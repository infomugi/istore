<?php
/* @var $this ProductimageController */
/* @var $model Productimage */

$this->breadcrumbs=array(
	'Productimages'=>array('index'),
	$model->name,
	);

	$this->pageTitle='Detail Productimage';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-success','title'=>'Add Productimage'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success', 'title'=>'List Productimage'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-success','title'=>'Manage Productimage'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_product_image,
		), array('class' => 'btn btn-info', 'title'=>'Edit Productimage'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_product_image,
		),  array('class' => 'btn btn-warning', 'title'=>'Hapus Productimage'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_product_image',
		'product_id',
		'name',
		'image',
		'status',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

