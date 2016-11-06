<?php
/* @var $this ProductimageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productimages',
	);

	$this->pageTitle='List Productimage';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Productimage',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Productimage',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>