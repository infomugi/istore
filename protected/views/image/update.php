<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->name=>array('view','id'=>$model->id_product_image),
	'Edit',
	);

	$this->pageTitle='Edit Image';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>