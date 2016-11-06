<?php
/* @var $this TagController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tags',
	);

	$this->pageTitle='List Tag';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Tag',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Tag',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>