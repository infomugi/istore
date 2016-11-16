<?php
/* @var $this ProvincesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Provinces',
	);

$this->pageTitle='List Provinces';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Manage Provinces',
		array('admin'),
		array('class' => 'btn btn-success'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				)); ?>

			</section>