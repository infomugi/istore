<?php
/* @var $this VillagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Villages',
	);

$this->pageTitle='List Villages';
?>

<section class="col-xs-12">


	<?php echo CHtml::link('Manage Villages',
		array('admin'),
		array('class' => 'btn btn-success'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
				)); ?>

			</section>