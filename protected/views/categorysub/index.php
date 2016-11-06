<?php
/* @var $this CategorysubController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categorysubs',
	);

	$this->pageTitle='List Categorysub';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Categorysub',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Categorysub',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>