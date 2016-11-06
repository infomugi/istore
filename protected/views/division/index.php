<?php
/* @var $this DivisionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Divisions',
	);

	$this->pageTitle='List Division';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Division',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Division',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>