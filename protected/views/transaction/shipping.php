<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->id_transaction=>array('view','id'=>$model->id_transaction),
	'Shipping',
	);

	$this->pageTitle='Pengiriman Barang';
	?>

	<?php echo $this->renderPartial('_form_shipping', array('model'=>$model)); ?>