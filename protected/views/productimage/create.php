<?php
/* @var $this ProductimageController */
/* @var $model Productimage */

$this->breadcrumbs=array(
	'Productimages'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Productimage';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>