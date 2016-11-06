<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	'Manage',
	);

	$this->pageTitle='Manage Review';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Review',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('List Review',
 array('index'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'review-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
			'columns'=>array(

			array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
			'style' => 'text-align: center;')),

					'id_product_review',
		'date',
		'customer_id',
		'price',
		'value',
		'quality',
		/*
		'summary',
		'description',
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