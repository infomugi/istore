<?php
/* @var $this BankController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Banks',
	);

	$this->pageTitle='List Bank';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Bank',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Bank',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>