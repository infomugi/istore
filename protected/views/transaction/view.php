<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->id_transaction,
	);

$this->pageTitle='Detail Transaction';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('Add',
		array('create'),
		array('class' => 'btn btn-success','title'=>'Add Transaction'));
		?>
		<?php echo CHtml::link('List',
			array('index'),
			array('class' => 'btn btn-success', 'title'=>'List Transaction'));
			?>
			<?php echo CHtml::link('Manage',
				array('admin'),
				array('class' => 'btn btn-success','title'=>'Manage Transaction'));
				?>
				<?php echo CHtml::link('Edit', 
					array('update', 'id'=>$model->id_transaction,
						), array('class' => 'btn btn-info', 'title'=>'Edit Transaction'));
						?>
						<?php echo CHtml::link('Delete', 
							array('delete', 'id'=>$model->id_transaction,
								),  array('class' => 'btn btn-warning', 'title'=>'Hapus Transaction'));
								?>

								<HR>

									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'id_transaction',
											'code',
											'date_order',
											'date_confirmation',
											'date_verification',
											'customer_id',
											'confirmation_id',
											'verification_id',
											'payment_method',
											'payment_total',
											'payment_file',
											'shipping_type',
											'shipping_brand',
											'shipping_code',
											'status',
											),
											)); ?>

										</section>

										<STYLE>
											th{width:150px;}
										</STYLE>

