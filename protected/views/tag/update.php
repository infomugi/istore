<?php
/* @var $this TagController */
/* @var $model Tag */

$this->breadcrumbs=array(
	'Tags'=>array('index'),
	$model->name=>array('view','id'=>$model->id_category_sub),
	'Edit',
	);

	$this->pageTitle='Edit Tag';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>