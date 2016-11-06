<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->name,
	);

	$this->pageTitle='Detail Image';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-success','title'=>'Add Image'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success', 'title'=>'List Image'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-success','title'=>'Manage Image'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_product_image,
		), array('class' => 'btn btn-info', 'title'=>'Edit Image'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_product_image,
		),  array('class' => 'btn btn-warning', 'title'=>'Hapus Image'));
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

