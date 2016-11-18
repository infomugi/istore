<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->id_transaction,
	);

$this->pageTitle='ID Transaksi - '.$model->code;
?>
<?php if($model->confirmation_id==0): ?>
	<?php echo CHtml::link('Konfirmasi Pembayaran', 
		array('confirmation', 'id'=>$model->id_transaction,
			), array('class' => 'btn btn-info', 'title'=>'Konfirmasi'));
			?>
		<HR>
		<?php endif; ?>

		<div class="alert alert-warning">
			Status Transaksi <?php echo Transaction::model()->status($model->status); ?>
		</div>

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
					'code',
					'date_order',
					array('name'=>'customer_id','value'=>$model->Customer->fullname),
					array('name'=>'payment_total','value'=>Yii::app()->numberFormatter->format("Rp ###,###,###",$model->payment_total)),
					array('name'=>'payment_method','value'=>Transaction::model()->method($model->status)),
					array('name'=>'status','value'=>Transaction::model()->status($model->status)),
					),
					)); ?>
					<?php if(!$model->confirmation_id==0): ?>
						<h3><i class="fa fa-credit-card-alt"/></i> Konfirmasi</h3>
						<?php $this->widget('zii.widgets.CDetailView', array(
							'data'=>$model,
							'htmlOptions'=>array("class"=>"table"),
							'attributes'=>array(
								'date_confirmation',
									array('name'=>'confirmation_id','value'=>$model->Confirmation->fullname),
								'payment_file',
								),
								)); ?>	

							<?php endif; if(!$model->verification_id==0): ?>
							<h3><i class="fa fa-truck"/></i> Pengiriman</h3>
							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'date_verification',
									array('name'=>'verification_id','value'=>$model->Verification->fullname),
									'shipping_type',
									'shipping_brand',
									'shipping_code',
									),
									)); ?>					
								<?php endif; ?>


								<STYLE>
									th{width:150px;}
								</STYLE>

