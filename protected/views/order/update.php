<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id_transaction_detail=>array('view','id'=>$model->id_transaction_detail),
	'Edit',
	);

	$this->pageTitle='Edit Order';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>