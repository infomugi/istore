<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
'Products'=>array('index'),
$model->name,
);

$this->pageTitle='Detail Product - '.$model->name;
?>


<section class="col-xs-12">

		<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Product'));
		?>
		<?php echo CHtml::link('Add Image',
		array('image/create', 'product'=>$model->id_product),
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
		<?php echo CHtml::link('Image', 
		array('image', 'id'=>$model->id_product,
		), array('class' => 'btn btn-info', 'title'=>'Edit Image'));
		?>
		<?php echo CHtml::link('Delete', 
		array('delete', 'id'=>$model->id_product,
		),  array('class' => 'btn btn-warning', 'title'=>'Hapus Product'));
		?>
		<?php echo CHtml::link('View', 
		array('detail', 'id'=>$model->id_product,
		),  array('class' => 'btn btn-danger', 'title'=>'View Product'));
		?>

<HR>
<div class="col-md-6"> 
<h2><i class="fa fa-archive"/></i> Info</h2>
		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'htmlOptions'=>array("class"=>"table"),
		'attributes'=>array(
			'code',
			'name',
			'description',
			array('name'=>'category_id','value'=>$model->Category->name),
			array('name'=>'sub_category_id','value'=>$model->Tag->name),
			array(
			'label'=>'Price',
			'type'=>'raw',
			'value'=>Yii::app()->numberFormatter->format("Rp ###,###,###",$model->price),
			),
			'discount',
			'keyword',
			'abstrack',
		),
		)); ?>
</div>
<div class="col-md-6"> 
<h2><i class="fa fa-image"/></i> Image</h2>
<img src="<?php echo YII::app()->baseUrl."/image/product/big/".$model->image; ?>"/>
</div>
<div class="col-md-12"> 
<h2><i class="fa fa-eye"/></i> Spesification</h2>
	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table"),
	'attributes'=>array(
		array('name'=>'color','value'=>Product::model()->color($model->color)),
		array('name'=>'status','value'=>Product::model()->status($model->color)),
		'stock',
		'spesification',
		'weight',
		array('name'=>'weight','value'=>$model->weight . " KG"),
		array('name'=>'brand_id','value'=>$model->Brand->name),
		),
	)); ?>	
</div>

<div class="col-md-6"> 
<h2><i class="fa fa-bar-chart"/></i> Statistik</h2>
	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table"),
	'attributes'=>array(
		'views',
		'likes',
		'sales',
		'rate',
	),
	)); ?>															
</div>							
<div class="col-md-6"> 
<h2><i class="fa fa-user"/></i> Detail</h2>
	<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table"),
	'attributes'=>array(
	// 'id_product',
		array('name'=>'created_id','value'=>$model->Created->fullname),
		array('name'=>'update_id','value'=>$model->Update->fullname),
		'created_date',
		'update_date',
	),
	)); ?>		
</div>									

</section>

<STYLE>
th{width:150px;}
</STYLE>

