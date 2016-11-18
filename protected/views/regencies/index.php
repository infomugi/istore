<?php
/* @var $this RegenciesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Regencies',
	);

	$this->pageTitle='List Regencies';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Regencies',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Regencies',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>