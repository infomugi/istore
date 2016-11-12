<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->id_transaction,
	);

$this->pageTitle='Transaction ID - '.$model->code;
?>

<?php echo CHtml::link('Konfirmasi Pembayaran', 
	array('confirmation', 'id'=>$model->id_transaction,
		), array('class' => 'btn btn-info', 'title'=>'Konfirmasi'));
		?>

		<HR>

			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'htmlOptions'=>array("class"=>"table"),
				'attributes'=>array(
					'code',
					'date_order',
					array('name'=>'customer_id','value'=>$model->Customer->fullname),
					'payment_total',
					array('name'=>'payment_method','value'=>Transaction::model()->method($model->status)),
					array('name'=>'status','value'=>Transaction::model()->status($model->status)),
					),
					)); ?>
					<?php if(!$model->confirmation_id==0): ?>
						<h2><i class="fa fa-credit-card-alt"/></i> Konfirmasi</h2>
						<?php $this->widget('zii.widgets.CDetailView', array(
							'data'=>$model,
							'htmlOptions'=>array("class"=>"table"),
							'attributes'=>array(
								'date_confirmation',
								'confirmation_id',
								'payment_file',
								),
								)); ?>	

							<?php endif; if(!$model->verification_id==0): ?>
							<h2><i class="fa fa-truck"/></i> Pengiriman</h2>
							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'date_verification',
									'verification_id',
									'shipping_type',
									'shipping_brand',
									'shipping_code',
									),
									)); ?>					
								<?php endif; ?>


								<STYLE>
									th{width:150px;}
								</STYLE>

