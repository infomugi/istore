<?php
/* @var $this SlideController */
/* @var $model Slide */

$this->breadcrumbs=array(
	'Slides'=>array('index'),
	$model->name=>array('view','id'=>$model->id_setting_slide),
	'Edit',
	);

	$this->pageTitle='Edit Slide';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>