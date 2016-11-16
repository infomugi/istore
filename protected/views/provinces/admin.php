<?php
/* @var $this ProvincesController */
/* @var $model Provinces */

$this->breadcrumbs=array(
	'Provinces'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Provinces';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('List Provinces',
		array('index'),
		array('class' => 'btn btn-success'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'provinces-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
				'columns'=>array(

					array(
						'header'=>'No',
						'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
						'htmlOptions'=>array('width'=>'10px', 
							'style' => 'text-align: center;')),

					'id',
					'name',
					array(
						'header'=>'Action',
						'class'=>'CButtonColumn',
						'htmlOptions'=>array('width'=>'100px', 
							'style' => 'text-align: center;'),
						),
					),
					)); ?>
					
				</section>