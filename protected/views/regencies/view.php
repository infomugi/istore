<?php
/* @var $this RegenciesController */
/* @var $model Regencies */

$this->breadcrumbs=array(
	'Regencies'=>array('index'),
	$model->name,
	);

	$this->pageTitle='Detail Regencies';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-success','title'=>'Add Regencies'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success', 'title'=>'List Regencies'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-success','title'=>'Manage Regencies'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id,
		), array('class' => 'btn btn-info', 'title'=>'Edit Regencies'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id,
		),  array('class' => 'btn btn-warning', 'title'=>'Hapus Regencies'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id',
		'province_id',
		'name',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

