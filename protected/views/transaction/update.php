<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->id_transaction=>array('view','id'=>$model->id_transaction),
	'Edit',
	);

	$this->pageTitle='Edit Transaction';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>