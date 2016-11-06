<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
	);

	$this->pageTitle='Detail Product';
	?>


	<section class="col-xs-12">

		<?php echo CHtml::link('Add',
	 array('create'),
 array('class' => 'btn btn-success','title'=>'Add Product'));
		 ?>
		<?php echo CHtml::link('List',
	 array('index'),
 array('class' => 'btn btn-success', 'title'=>'List Product'));
		 ?>
		<?php echo CHtml::link('Manage',
	 array('admin'),
 array('class' => 'btn btn-success','title'=>'Manage Product'));
		 ?>
		<?php echo CHtml::link('Edit', 
	 array('update', 'id'=>$model->id_product,
		), array('class' => 'btn btn-info', 'title'=>'Edit Product'));
 ?>
		<?php echo CHtml::link('Delete', 
	 array('delete', 'id'=>$model->id_product,
		),  array('class' => 'btn btn-warning', 'title'=>'Hapus Product'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions'=>array("class"=>"table"),
			'attributes'=>array(
						'id_product',
		'code',
		'name',
		'description',
		'category_id',
		'sub_category_id',
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
				),
				)); ?>

			</section>

			<STYLE>
				th{width:150px;}
			</STYLE>

