<?php
/* @var $this DistrictsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Districts',
	);

$this->pageTitle='List Districts';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Manage Districts',
		array('admin'),
		array('class' => 'btn btn-success'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				)); ?>

			</section>