<?php
/* @var $this BankController */
/* @var $model Bank */

$this->breadcrumbs=array(
	'Banks'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Bank';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Bank'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Bank'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Bank'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_bank,
						), array('class' => 'btn btn-info', 'title'=>'Edit Bank'));
						?>
						<?php echo CHtml::link('Delete', 
							array('delete', 'id'=>$model->id_bank,
								),  array('class' => 'btn btn-warning', 'title'=>'Hapus Bank'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'name',
											'code',
											'branch',
											// 'status',
											// 'user_id',
											// 'verification_id',
											// 'date_created',
											// 'date_verification',
											),
											)); ?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

