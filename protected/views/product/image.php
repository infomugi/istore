<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name=>array('view','id'=>$model->id_product),
	'Edit',
	);

	$this->pageTitle='Edit Image';
	?>

	<?php echo $this->renderPartial('_form_image', array('model'=>$model)); ?>