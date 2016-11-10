<?php
/* @var $this BrandController */
/* @var $model Brand */

$this->breadcrumbs=array(
	'Brands'=>array('index'),
	$model->name=>array('view','id'=>$model->id_brand),
	'Edit',
	);

	$this->pageTitle='Edit Brand';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>