<?php
/* @var $this TagController */
/* @var $model Tag */

$this->breadcrumbs=array(
	'Tags'=>array('index'),
	'Add',
	);

	$this->pageTitle='Add Tag';
	?>

	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>