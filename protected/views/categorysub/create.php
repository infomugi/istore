<?php
/* @var $this CategorysubController */
/* @var $model Categorysub */

$this->breadcrumbs=array(
	'Categorysubs'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Categorysub';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>