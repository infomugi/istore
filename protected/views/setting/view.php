<?php
/* @var $this SettingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'Settings'=>array('index'),
	$model->name,
	);

	$this->pageTitle='Detail Setting';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-success','title'=>'Add Setting'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success', 'title'=>'List Setting'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-success','title'=>'Manage Setting'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_site,
		), array('class' => 'btn btn-info', 'title'=>'Edit Setting'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_site,
		),  array('class' => 'btn btn-warning', 'title'=>'Hapus Setting'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_site',
		'name',
		'description',
		'keywords',
		'favicon',
		'logo',
		'address',
		'phone',
		'email',
		'facebook',
		'instagram',
		'twitter',
		'status',
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

