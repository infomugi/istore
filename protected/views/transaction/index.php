<?php
/* @var $this TransactionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transactions',
	);

	$this->pageTitle='List Transaction';
	?>

	<section class="col-xs-12">

		<?php echo CHtml::link('Add Transaction',
 array('create'),
 array('class' => 'btn btn-success'));
 ?>
		<?php echo CHtml::link('Manage Transaction',
 array('admin'),
 array('class' => 'btn btn-success'));
 ?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)); ?>

		</section>