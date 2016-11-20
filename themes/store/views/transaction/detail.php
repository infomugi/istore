<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->id_transaction,
	);

$this->pageTitle='Order ID - '.$model->code;
?>

<?php if($model->confirmation_id==0): ?>
	<?php echo CHtml::link('Konfirmasi Pembayaran', 
		array('confirmation', 'id'=>$model->token,
			), array('class' => 'btn btn-success', 'title'=>'Konfirmasi'));
			?>
			<HR>
		<?php endif; ?>

		<!-- START: CART -->
		<div class="alert alert-<?php echo Transaction::model()->color($model->status); ?>">
			Status Transaksi <?php echo Transaction::model()->status($model->status); ?>
		</div>

		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#order"><h4><i class="fa fa-server"/></i> Order</h4></a></li>
			<?php if(!$model->confirmation_id==0): ?>
				<li><a data-toggle="tab" href="#payment"><h4><i class="fa fa-credit-card"/></i> Pembayaran</h4></a></li>
			<?php endif; if(!$model->verification_id==0): ?>
			<li><a data-toggle="tab" href="#shipping"><h4><i class="fa fa-truck"/></i> Order</h4></a></li>
		<?php endif; ?>
		<li><a data-toggle="tab" href="#cart"><h4><i class="fa fa-shopping-cart"/></i> Detail</h4></a></li>
	</ul>

	<div class="tab-content">
		<div id="order" class="tab-pane fade in active">
			<!-- START: TRANSACTION -->
			<div class="col-md-6"> 
				<!-- <h4><i class="fa fa-shopping-cart"/></i> Order</h4> -->
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'code',
						'date_order',
						array('name'=>'payment_total','value'=>Yii::app()->numberFormatter->format("Rp ###,###,###",$model->payment_total)),
						array('name'=>'payment_method','value'=>Transaction::model()->method($model->payment_method)),
						array('name'=>'status','value'=>Transaction::model()->status($model->status)),
						),
						)); ?>
					</div>

					<div class="col-md-6">
						<!-- <h4><i class="fa fa-user"/></i> Pelanggan</h4> -->
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

							<!-- END: TRANSACTION -->

						</div>


						<div id="payment" class="tab-pane fade">

							<div class="col-md-12">
								<?php if(!$model->confirmation_id==0): ?>
									<!-- <h4><i class="fa fa-credit-card"/></i> Pembayaran</h4> -->
									<?php $this->widget('zii.widgets.CDetailView', array(
										'data'=>$model,
										'htmlOptions'=>array("class"=>"table"),
										'attributes'=>array(
											'date_confirmation',
											array('name'=>'confirmation_id','value'=>$model->Confirmation->fullname),
											array('name'=>'payment_bank_name','value'=>$model->Sender->name),
											array('name'=>'payment_bank_code','value'=>$model->payment_bank_code),
											array('name'=>'payment_bank_branch','value'=>$model->payment_bank_branch),
											array('name'=>'payment_bank_pay','value'=>Yii::app()->numberFormatter->format("Rp ###,###,###",$model->payment_bank_pay)),
											'payment_file',
											),
											)); ?>	
										<?php endif; ?>
									</div>

								</div>

								<div id="shipping" class="tab-pane fade">
									<div class="col-md-12"> 
										<?php if(!$model->verification_id==0): ?>
											<!-- <h4><i class="fa fa-truck"/></i> Pengiriman</h4> -->
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
										</div>

										<div id="cart" class="tab-pane fade">

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
													<!-- START: CART -->
												</div>

											</div>








											<STYLE>
												th{width:150px;}
											</STYLE>

