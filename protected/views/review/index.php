<?php
/* @var $this ReviewController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reviews',
	);

	$this->pageTitle='List Review';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Review',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Review',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>