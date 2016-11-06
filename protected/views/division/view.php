<?php
/* @var $this DivisionController */
/* @var $model Division */

$this->breadcrumbs=array(
	'Divisions'=>array('index'),
	$model->name,
	);

	$this->pageTitle='Detail Division';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-success','title'=>'Add Division'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success', 'title'=>'List Division'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-success','title'=>'Manage Division'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_division,
		), array('class' => 'btn btn-info', 'title'=>'Edit Division'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_division,
		),  array('class' => 'btn btn-warning', 'title'=>'Hapus Division'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_division',
		'name',
		'description',
		'status',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

