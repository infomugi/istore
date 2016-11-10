<?php
/* @var $this BrandController */
/* @var $model Brand */

$this->breadcrumbs=array(
	'Brands'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Brand';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>