<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Review';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>