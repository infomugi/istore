<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id_transaction_detail,
	);

$this->pageTitle='Detail Order';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Order'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Order'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Order'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_transaction_detail,
						), array('class' => 'btn btn-info', 'title'=>'Edit Order'));
						?>
						<?php echo CHtml::link('Delete', 
							array('delete', 'id'=>$model->id_transaction_detail,
								),  array('class' => 'btn btn-warning', 'title'=>'Hapus Order'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'id_transaction_detail',
											'transaction_id',
											'product_id',
											'size',
											'color',
											'quantity',
											'status',
											),
											)); ?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

