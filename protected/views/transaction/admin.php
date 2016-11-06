<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	'Manage',
	);

	$this->pageTitle='Manage Transaction';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Transaction',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('List Transaction',
 array('index'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'transaction-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
			'columns'=>array(

			array(
			'header'=>'No',
			'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			'htmlOptions'=>array('width'=>'10px', 
			'style' => 'text-align: center;')),

					'id_transaction',
		'code',
		'date_order',
		'date_confirmation',
		'date_verification',
		'customer_id',
		/*
		'confirmation_id',
		'verification_id',
		'payment_method',
		'payment_total',
		'payment_file',
		'shipping_type',
		'shipping_brand',
		'shipping_code',
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