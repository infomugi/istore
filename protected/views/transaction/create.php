<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Transaction';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>