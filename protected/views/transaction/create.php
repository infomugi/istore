<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	'Add',
	);

	$this->pageTitle='Checkout';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>