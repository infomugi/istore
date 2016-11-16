<?php
/* @var $this DistrictsController */
/* @var $model Districts */

$this->breadcrumbs=array(
	'Districts'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Districts';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('List Districts',
		array('index'),
		array('class' => 'btn btn-success'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'districts-grid',
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
					'regency_id',
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