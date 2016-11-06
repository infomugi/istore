<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->id_product_review,
	);

	$this->pageTitle='Detail Review';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-success','title'=>'Add Review'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success', 'title'=>'List Review'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-success','title'=>'Manage Review'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_product_review,
		), array('class' => 'btn btn-info', 'title'=>'Edit Review'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_product_review,
		),  array('class' => 'btn btn-warning', 'title'=>'Hapus Review'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_product_review',
		'date',
		'customer_id',
		'price',
		'value',
		'quality',
		'summary',
		'description',
		'status',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

