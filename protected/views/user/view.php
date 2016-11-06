<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id_user,
	);

$this->pageTitle='Detail User';
?>

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add User'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List User'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage User'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_user,
						), array('class' => 'btn btn-info', 'title'=>'Edit User'));
						?>
						<?php echo CHtml::link('Delete', 
							array('delete', 'id'=>$model->id_user,
								),  array('class' => 'btn btn-warning', 'title'=>'Hapus User'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'id_user',
											'create_time',
											'update_time',
											'visit_time',
											'fullname',
											'gender',
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
											),
											)); ?>

										

										<STYLE>
											th{width:150px;}
										</STYLE>

