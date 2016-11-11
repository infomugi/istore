<?php
/* @var $this TransactionController */
/* @var $model Transaction */
/* @var $form CActiveForm */
?>

<div class="row">
	<div class="col-sm-4">
		<div class="framed-box">
			<div class="framed-box-wrap">
				<div class="pricing-title2">
					<img src="https://www.niagahoster.co.id/bb-themes/monjali/assets/images/new_layout/Pembayaran_07.png" alt="pembayaran bca">
				</div>
				<div class="pricing-text-list">
					<ul class="list7">
						<li>No. Rekening: <strong>0283116490</strong></li>
						<li>a.n: <strong>PT. KUPA KUPI STORE</strong></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
	<div class="col-sm-4">
		<div class="framed-box">
			<div class="framed-box-wrap">
				<div class="pricing-title2">
					<img src="https://www.niagahoster.co.id/bb-themes/monjali/assets/images/new_layout/Pembayaran_09.png" alt="pembayaran mandiri">
				</div>
				<div class="pricing-text-list">
					<ul class="list7">
						<li>No. Rekening: <strong>1030006055954</strong></li>
						<li>a.n: <strong>PT. KUPA KUPI STORE</strong></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
	<div class="col-sm-4">
		<div class="framed-box">
			<div class="framed-box-wrap">
				<div class="pricing-title2">
					<img src="https://www.niagahoster.co.id/bb-themes/monjali/assets/images/new_layout/Pembayaran_11.png" alt="pembayaran bni">
				</div>
				<div class="pricing-text-list">
					<ul class="list7">
						<li>No. Rekening: <strong>3300030034</strong></li>
						<li>a.n: <strong>PT. KUPA KUPI STORE</strong></li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
</div>

<style type="text/css">
	.framed-box{border: 1px solid #e3e3e3; width: 100%}.framed-box.center{text-align: center}.framed-box-wrap{border: 1px solid #fff; background-color: #f9f9f9}.framed-box-wrap .pricing-title{background-color: #f1f1f1; padding: 20px 0 0; text-align: center; border-bottom: 1px solid #fff}.framed-box-wrap .pricing-text-list{padding: 15px 20px 20px; text-align: center}
	.framed-box-wrap .pricing-title2{background-color: #b9b8bd; border-bottom: 1px solid #fff; padding: 10px 0; text-align: center; color: #f9f9fb}
	.list7 ol,li{list-style: none;margin: 0;padding: 0;}
</style>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-12 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'transaction-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>
			
			<div class="form-group">
				
				<div class="col-lg-4 col-md-3 col-xs-12 control-label">
					<?php echo $form->labelEx($model,'payment_method'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'payment_method'); ?>
					<?php
					echo $form->radioButtonList($model,'payment_method',
						array('1'=>'Transfer','2'=>'COD'),
						array(
							'template'=>'{input}{label}',
							'separator'=>'',
							'labelOptions'=>array(
								'style'=>'padding-right:20px;margin-left:15px'),

							)                              
						);
						?>
					</div>

				</div>  


				<div class="form-group">
					<div class="col-md-12">  
					</br></br>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->