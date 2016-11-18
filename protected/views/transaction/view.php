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

	<?php echo CHtml::link('Verifikasi Order', 
		array('verification', 'id'=>$model->id_transaction,
			),  array('class' => 'btn btn-warning', 'title'=>'Verifikasi Transaksi'));
			?>

			<HR>

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

									<div class="cart">
									<div class="order-detail-content">
										<div class="table-responsive">
											<table class="table table-bordered cart_summary">
												<thead>
													<tr>
														<th class="cart_product">Product</th>
														<th>Description</th>
														<th>Avail.</th>
														<th>Unit price</th>
														<th>Qty</th>
														<th>Sub Total</th>
													</tr>
												</thead>
												<tbody>

													<?php 
													$this->widget('zii.widgets.CListView', array(
														'dataProvider'=>$dataProvider,
														'itemView'=>'_view_cart',
														)); ?>

													</tbody>
													<tfoot>
														<tr>
															<td colspan="2" rowspan="2"></td>

														</tr>
														<tr>
															<td colspan="3"><strong>Grand Total</strong></td>
															<td colspan="2"><strong>
																<?php 
																echo Yii::app()->numberFormatter->format("Rp ###,###,###",Transaction::model()->grandtotal($model->id_transaction)); 
																?> </strong></td>
															</tr>
														</tfoot>
													</table>
												</div>
											</div>
										</div>
									</div>


								</section>

								<STYLE>
									th{width:150px;}
								</STYLE>


								
