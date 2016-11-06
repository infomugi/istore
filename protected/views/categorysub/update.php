<?php
/* @var $this CategorysubController */
/* @var $model Categorysub */

$this->breadcrumbs=array(
	'Categorysubs'=>array('index'),
	$model->name=>array('view','id'=>$model->id_category_sub),
	'Edit',
	);

	$this->pageTitle='Edit Categorysub';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>