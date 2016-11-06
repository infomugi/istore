<?php
/* @var $this SlideController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Slides',
	);

	$this->pageTitle='List Slide';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Slide',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Slide',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>