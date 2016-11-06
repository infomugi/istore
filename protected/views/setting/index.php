<?php
/* @var $this SettingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Settings',
	);

	$this->pageTitle='List Setting';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Setting',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Setting',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>