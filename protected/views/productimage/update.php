<?php
/* @var $this ProductimageController */
/* @var $model Productimage */

$this->breadcrumbs=array(
	'Productimages'=>array('index'),
	$model->name=>array('view','id'=>$model->id_product_image),
	'Edit',
	);

	$this->pageTitle='Edit Productimage';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>