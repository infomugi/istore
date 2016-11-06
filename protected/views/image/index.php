<?php
/* @var $this ImageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Images',
	);

	$this->pageTitle='List Image';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Image',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Image',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>