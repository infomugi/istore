<?php
/* @var $this ImageController */
/* @var $model Image */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Image';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>