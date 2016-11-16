<?php
/* @var $this DistrictsController */
/* @var $model Districts */

$this->breadcrumbs=array(
	'Districts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Edit',
	);

	$this->pageTitle='Edit Districts';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>