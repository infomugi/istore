<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	'Manage',
	);

$this->pageTitle='Manage Transaction';
?>

<section class="col-xs-12">

	<?php echo CHtml::link('Transaksi Terbaru',
		array('listnew'),
		array('class' => 'btn btn-default'));
		?>

		<?php echo CHtml::link('Verifikasi Order',
			array('listconfirmation'),
			array('class' => 'btn btn-primary'));
			?>

			<?php echo CHtml::link('Verifikasi Pembayaran',
				array('listverification'),
				array('class' => 'btn btn-info'));
				?>

				<?php echo CHtml::link('Pengiriman Barang',
					array('listshipping'),
					array('class' => 'btn btn-danger'));
					?>

					<?php echo CHtml::link('Transaksi Berhasil',
						array('listsuccess'),
						array('class' => 'btn btn-success'));
						?>

						<HR>

							<?php $this->widget('zii.widgets.grid.CGridView', array(
								'id'=>'transaction-grid',
								'dataProvider'=>$model->search(),
								'filter'=>$model,
								'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
								'columns'=>array(

									array(
										'header'=>'No',
										'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
										'htmlOptions'=>array('width'=>'10px', 
											'style' => 'text-align: center;')),

									'code',
									'date_order',

									array('name'=>'customer_id','value'=>'$data->Customer->fullname'),
									array('name'=>'payment_total','value'=>'Yii::app()->numberFormatter->format("Rp ###,###,###",$data->payment_total)'),
									array('name'=>'payment_method','value'=>'Transaction::model()->method($data->status)'),
									array('name'=>'status','value'=>'Transaction::model()->status($data->status)'),

									array(
										'header'=>'Action',
										'class'=>'CButtonColumn',
										'htmlOptions'=>array('width'=>'100px', 
											'style' => 'text-align: center;'),
										),

									),
									)); ?>

								</section>