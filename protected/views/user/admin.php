<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage User';
?>


	<?php echo CHtml::link('Add User',
		array('create'),
		array('class' => 'btn btn-success'));
		?>
		<?php echo CHtml::link('List User',
			array('index'),
			array('class' => 'btn btn-success'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'user-grid',
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'id_user',
						'create_time',
						'update_time',
						'visit_time',
						'fullname',
						'gender',
		/*
		'birth',
		'email',
		'username',
		'password',
		'level',
		'division',
		'image',
		'ipaddress',
		'active',
		'status',
		*/
		array(
			'header'=>'Action',
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'100px', 
				'style' => 'text-align: center;'),
			),
		),
		)); ?>

