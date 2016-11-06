<?php
/* @var $this DivisionController */
/* @var $model Division */

$this->breadcrumbs=array(
	'Divisions'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Division';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Add Division',
		array('create'),
		array('class' => 'btn btn-success'));
		?>
		<?php echo CHtml::link('List Division',
			array('index'),
			array('class' => 'btn btn-success'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'division-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						// 'id_division',
						'name',
						'description',
						// 'status',
						
						array(
							'header'=>'Action',
							'class'=>'CButtonColumn',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),
						),
						)); ?>

					</section>