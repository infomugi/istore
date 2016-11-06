<?php
/* @var $this TagController */
/* @var $model Tag */

$this->breadcrumbs=array(
	'Tags'=>array('index'),
	$model->name,
	);

	$this->pageTitle='Detail Tag';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-success','title'=>'Add Tag'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success', 'title'=>'List Tag'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-success','title'=>'Manage Tag'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_category_sub,
		), array('class' => 'btn btn-info', 'title'=>'Edit Tag'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_category_sub,
		),  array('class' => 'btn btn-warning', 'title'=>'Hapus Tag'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_category_sub',
		'category_id',
		'name',
		'status',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

