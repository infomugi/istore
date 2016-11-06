<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Order';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>