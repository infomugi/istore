<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->id_product_review=>array('view','id'=>$model->id_product_review),
	'Edit',
	);

	$this->pageTitle='Edit Review';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>