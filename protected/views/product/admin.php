<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
	);

	$this->pageTitle='Manage Product';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Product',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('List Product',
 array('index'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'product-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
			'columns'=>array(

			array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
			'style' => 'text-align: center;')),

					'id_product',
		'code',
		'name',
		'description',
		'category_id',
		'sub_category_id',
		/*
		'color',
		'status',
		'stock',
		'spesification',
		'weight',
		'brand_id',
		'views',
		'likes',
		'discount',
		'created_id',
		'update_id',
		'created_date',
		'update_date',
		'keyword',
		'abstrack',
		'sales',
		'rate',
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