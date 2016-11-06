<?php
/* @var $this SlideController */
/* @var $model Slide */

$this->breadcrumbs=array(
	'Slides'=>array('index'),
	'Manage',
	);

	$this->pageTitle='Manage Slide';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Slide',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('List Slide',
 array('index'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'slide-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
			'columns'=>array(

			array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
			'style' => 'text-align: center;')),

					'id_setting_slide',
		'name',
		'description',
		'image',
		'status',
			array(
			'header'=>'Action',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'100px', 
			'style' => 'text-align: center;'),
			),
			),
			)); ?>
			
		</section>