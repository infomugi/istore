<?php
/* @var $this SettingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'Settings'=>array('index'),
	'Manage',
	);

	$this->pageTitle='Manage Setting';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Setting',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('List Setting',
 array('index'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'setting-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
			'columns'=>array(

			array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
			'style' => 'text-align: center;')),

					'id_site',
		'name',
		'description',
		'keywords',
		'favicon',
		'logo',
		/*
		'address',
		'phone',
		'email',
		'facebook',
		'instagram',
		'twitter',
		'status',
		*/
			array(
			'header'=>'Action',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'100px', 
			'style' => 'text-align: center;'),
			),
			),
			)); ?>
			
		</section>