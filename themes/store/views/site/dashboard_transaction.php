<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#confirm"><h5><i class="fa fa-credit-card"/></i> Konfirmasi Order <span class="badge bg-info animated flash"><?php echo $dataProvider2->totalItemCount; ?></span></h5></a></li>
	<li><a data-toggle="tab" href="#verification"><h5><i class="fa fa-shopping-cart"/></i> Verifikasi Order <span class="badge bg-success animated flash"><?php echo $dataProvider3->totalItemCount; ?></span></h5></a></li>
	<li><a data-toggle="tab" href="#shipping"><h5><i class="fa fa-truck"/></i> Shipping <span class="badge bg-warning animated flash"><?php echo $dataProvider4->totalItemCount; ?></span></h5></a></li>
	<li><a data-toggle="tab" href="#success"><h5><i class="fa fa-check"/></i> Order Terkirim <span class="badge bg-success animated flash"><?php echo $dataProvider5->totalItemCount; ?></span></h5></a></li>
</ul>

<div class="tab-content">

			<!-- START TAB: TRANSACTION 2 -->
			<div id="confirm" class="tab-pane fade in active"> 
				<div class="alert alert-info">
					Daftar transaksi terbaru, yang sudah dilakukan transfer oleh customer.  
				</div>			
				<!-- START: TRANSACTION -->
				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'transaction-grid',
					'dataProvider'=>$dataProvider2,
					'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
					'columns'=>array(

						array(
							'header'=>'No',
							'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
							'htmlOptions'=>array('width'=>'10px', 
								'style' => 'text-align: center;')),

						'code',
						'date_confirmation',

						array('name'=>'confirmation_id','value'=>'$data->Confirmation->fullname'),
						array('name'=>'payment_method','value'=>'Transaction::model()->method($data->status)'),
						array('name'=>'status','value'=>'Transaction::model()->status($data->status)'),
						array('name'=>'payment_total','value'=>'Yii::app()->numberFormatter->format("Rp ###,###,###",$data->payment_total)'),

						array(
							'header'=>'Detail',
							'class'=>'CButtonColumn',
							'template'=>'{view}',
							'htmlOptions'=>array('width'=>'100px', 
								'style' => 'text-align: center;'),
							),

						),
						)); ?>
						<!-- END: TRANSACTION -->

					</div>	
					<!-- END TAB: TRANSACTION 2 -->

					<!-- START TAB: TRANSACTION 3 -->
					<div id="verification" class="tab-pane fade in">
						<div class="alert alert-success">
						Daftar transaksi, yang telah di verifikasi pembayaran oleh petugas.  
						</div>
						<!-- START: TRANSACTION -->
						<?php $this->widget('zii.widgets.grid.CGridView', array(
							'id'=>'transaction-grid',
							'dataProvider'=>$dataProvider3,
							'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
							'columns'=>array(

								array(
									'header'=>'No',
									'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
									'htmlOptions'=>array('width'=>'10px', 
										'style' => 'text-align: center;')),

								'code',
								'date_verification',

								array('name'=>'verification_id','value'=>'$data->Verification->fullname'),
								array('name'=>'verification_status','value'=>'Transaction::model()->verification($data->verification_status)'),
								array('name'=>'status','value'=>'Transaction::model()->status($data->status)'),
								array('name'=>'payment_total','value'=>'Yii::app()->numberFormatter->format("Rp ###,###,###",$data->payment_total)'),

								array(
									'header'=>'Detail',
									'class'=>'CButtonColumn',
									'template'=>'{view}',
									'htmlOptions'=>array('width'=>'100px', 
										'style' => 'text-align: center;'),
									),

								),
								)); ?>
								<!-- END: TRANSACTION -->

							</div>	
							<!-- END TAB: TRANSACTION 3 -->

							<!-- START TAB: TRANSACTION 4 -->
							<div id="shipping" class="tab-pane fade in">
								<div class="alert alert-warning">
									Daftar transaksi, dalam proses pengiriman barang.  
								</div>
								<!-- START: TRANSACTION -->
								<?php $this->widget('zii.widgets.grid.CGridView', array(
									'id'=>'transaction-grid',
									'dataProvider'=>$dataProvider4,
									'itemsCssClass' => 'table-responsive table table-striped table-hover table-vcenter',
									'columns'=>array(

										array(
											'header'=>'No',
											'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
											'htmlOptions'=>array('width'=>'10px', 
												'style' => 'text-align: center;')),

										'code',
										'shipping_date',
										array('name'=>'shipping_brand','value'=>'Transaction::model()->coureer($data->shipping_brand)'),
										'shipping_code',
										array('name'=>'status','value'=>'Transaction::model()->status($data->status)'),

										array(
											'header'=>'Detail',
											'class'=>'CButtonColumn',
											'template'=>'{view}',
											'htmlOptions'=>array('width'=>'100px', 
												'style' => 'text-align: center;'),
											),

										),
										)); ?>
										<!-- END: TRANSACTION -->

									</div>	
									<!-- END TAB: TRANSACTION 4 -->

									<!-- START TAB: TRANSACTION 5 -->
									<div id="success" class="tab-pane fade in">
										<div class="alert alert-success">
											Daftar transaksi, yang telah berhasil diterima oleh pelanggan.  
										</div>
										<!-- START: TRANSACTION -->
										<?php $this->widget('zii.widgets.grid.CGridView', array(
											'id'=>'transaction-grid',
											'dataProvider'=>$dataProvider5,
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
									// array('name'=>'payment_method','value'=>'Transaction::model()->method($data->status)'),
												array('name'=>'status','value'=>'Transaction::model()->status($data->status)'),
												array('name'=>'payment_total','value'=>'Yii::app()->numberFormatter->format("Rp ###,###,###",$data->payment_total)'),

												array(
													'header'=>'Detail',
													'class'=>'CButtonColumn',
													'template'=>'{view}',
													'htmlOptions'=>array('width'=>'100px', 
														'style' => 'text-align: center;'),
													),

												),
												)); ?>
												<!-- END: TRANSACTION -->

											</div>	
											<!-- END TAB: TRANSACTION 5 -->

										</div>