<?php
/* @var $this BankController */
/* @var $model Bank */

$this->breadcrumbs=array(
	'Banks'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Bank';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>