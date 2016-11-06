<?php
/* @var $this SlideController */
/* @var $model Slide */

$this->breadcrumbs=array(
	'Slides'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Slide';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>