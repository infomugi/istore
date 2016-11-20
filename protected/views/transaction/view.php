<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->id_transaction,
	);

$this->pageTitle='Detail Order - '.$model->code;
?>


<section class="col-xs-12">
	<?php if($model->verification_id==0): ?>
		<button class="btn btn-success" data-toggle="modal" data-target=".bs-modal-sm"><i class="fa fa-credit-card"/></i> Bukti Transfer</button>
	
		<?php echo CHtml::link('Verifikasi Order', 
			array('verification', 'id'=>$model->id_transaction,
				),  array('class' => 'btn btn-warning', 'title'=>'Verifikasi Transaksi'));
				?>
				<HR>
				<?php endif; ?>
				<?php if($model->verification_id!=0 AND $model->shipping_id==0): ?>
					<?php echo CHtml::link('Kirim Barang', 
						array('shipping', 'id'=>$model->id_transaction,
							),  array('class' => 'btn btn-warning', 'title'=>'Kirim Barang'));
							?>
							<HR>
							<?php endif; ?>
							<?php if($model->verification_id!=0 AND $model->shipping_id!=0): ?>
							
									<button class="btn btn-success" data-toggle="modal" data-target=".bs-modal-sm2"><i class="fa fa-truck"/></i> Order Tracking</button>
										
												<HR>
														<?php endif; ?>

														<div class="alert alert-<?php echo Transaction::model()->color($model->status); ?>">
															Status Order : <?php echo Transaction::model()->status($model->status); ?>
															<?php if($model->payment_total != $model->payment_bank_pay): ?>
																, <b>Jumlah Transfer tidak sesuai dengan jumlah tagihan</b>.
															<?php endif; ?>
														</div>
														<div class="col-md-6"> 
															<h3><i class="fa fa-shopping-cart"/></i> Order</h3>
															<?php $this->widget('zii.widgets.CDetailView', array(
																'data'=>$model,
																'htmlOptions'=>array("class"=>"table"),
																'attributes'=>array(
																	'code',
																	'date_order',
																	array('name'=>'payment_total','value'=>Yii::app()->numberFormatter->format("Rp ###,###,###",$model->payment_total)),
																	array('name'=>'payment_method','value'=>Transaction::model()->method($model->payment_method)),
																	array('name'=>'payment_bank_id','value'=>$model->Receiver->name),
																	array('name'=>'status','value'=>Transaction::model()->status($model->status)),
																	),
																	)); ?>
																</div>
																<div class="col-md-6"> 
																	<?php if(!$model->verification_id==0): ?>
																		<h3><i class="fa fa-truck"/></i> Pengiriman</h3>
																		<?php $this->widget('zii.widgets.CDetailView', array(
																			'data'=>$model,
																			'htmlOptions'=>array("class"=>"table"),
																			'attributes'=>array(
																				'date_verification',
																				array('name'=>'verification_id','value'=>$model->Verification->fullname),
																				array('name'=>'verification_status','value'=>Transaction::model()->verification($model->verification_status)),
																				array('name'=>'shipping_type','value'=>Transaction::model()->method($model->shipping_type)),
																				array('name'=>'shipping_brand','value'=>Transaction::model()->coureer($model->shipping_brand)),
																				'shipping_code',
																				),
																				)); ?>					
																			<?php endif; ?>
																		</div>
																		<div class="col-md-6">
																			<h3><i class="fa fa-user"/></i> Pelanggan</h3>
																			<?php $this->widget('zii.widgets.CDetailView', array(
																				'data'=>$model,
																				'htmlOptions'=>array("class"=>"table"),
																				'attributes'=>array(
																					array('name'=>'customer_id','value'=>$model->Customer->fullname),
																					array('label'=>'Email','value'=>$model->Customer->email),
																					array('label'=>'Tanggal Lahir','value'=>$model->Customer->birth),
																					),
																					)); ?>
																				</div>
																				<div class="col-md-6">
																					<?php if(!$model->confirmation_id==0): ?>
																						<h3><i class="fa fa-credit-card"/></i> Pembayaran</h3>
																						<?php $this->widget('zii.widgets.CDetailView', array(
																							'data'=>$model,
																							'htmlOptions'=>array("class"=>"table"),
																							'attributes'=>array(
																								'date_confirmation',
																								array('name'=>'confirmation_id','value'=>$model->Confirmation->fullname),
																								array('name'=>'payment_bank_name','value'=>$model->Sender->name),
																								array('name'=>'payment_bank_code','value'=>$model->payment_bank_code),
																								array('name'=>'payment_bank_branch','value'=>$model->payment_bank_branch),
																								array('name'=>'payment_bank_pay','value'=>$model->payment_bank_pay),
																								'payment_file',
																								),
																								)); ?>	
																							<?php endif; ?>
																						</div>

																						<div class="cart">
																							<div class="order-detail-content">
																								<div class="table-responsive">
																									<table class="table table-bordered cart_summary">
																										<thead>
																											<tr>
																												<th class="cart_product">Product</th>
																												<th>Nama</th>
																												<th>Status</th>
																												<th>Harga</th>
																												<th>Jumlah Beli</th>
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

																							<div class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
																								<div class="modal-dialog modal-sm">
																									<div class="modal-content">
																										<div class="modal-header">
																											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																											<h5 class="modal-title text-center" id="myModalLabel">Bukti Transfer</h5>
																										</div>
																										<div class="modal-body">

																											<img src="<?php echo YII::app()->baseUrl; ?>/image/transaction/big/<?php echo $model->payment_file; ?>" class="img-responsive">

																										</div>
																									</div>
																								</div>
																							</div>


																							<div class="modal fade bs-modal-sm2" tabindex="-1" role="dialog" aria-hidden="true">
																								<div class="modal-dialog">
																									<div class="modal-content">
																										<div class="modal-header">
																											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																											<h5 class="modal-title text-center" id="myModalLabel">Tracking Order</h5>
																										</div>
																										<div class="modal-body">

																											 <iframe width="100%" height="600" frameborder="0" src="https://track.aftership.com/<?php echo strtolower(Transaction::model()->coureer($model->shipping_brand)); ?>/<?php echo $model->shipping_code; ?>"></iframe> 

																											<style type="text/css">
																											.store-home, .title-row{display: none}
																											</style>

																									</div>
																								</div>
																							</div>
																						</div>




																					</section>

																					<STYLE>
																						th{width:150px;}
																					</STYLE>



