<?php
/* @var $this TransactionController */
/* @var $model Transaction */
/* @var $form CActiveForm */
?>

<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-12 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'transaction-form',
			'enableAjaxValidation'=>false,
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
				),
			'errorMessageCssClass' => 'label label-info',
			'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
			)); ?>


			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>
			

				<div class="form-group">

					<div class="col-lg-4 col-md-3 col-xs-12 control-label">
						<?php echo $form->labelEx($model,'shipping_type'); ?>
					</div>   

					<div class="col-lg-8 col-md-9 col-xs-12">
						<?php echo $form->error($model,'shipping_type'); ?>
						<?php
						echo $form->radioButtonList($model,'shipping_type',
							array('1'=>'Jasa Kurir','2'=>'Cash on Delivery'),
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

						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'shipping_brand'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'shipping_brand'); ?>
							<?php
							echo $form->radioButtonList($model,'shipping_brand',
								array('1'=>'JNE','2'=>'TIKI','3'=>'POS'),
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
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'shipping_code'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'shipping_code'); ?>
							<?php echo $form->textField($model,'shipping_code',array('class'=>'form-control')); ?>
						</div>
		
				</div>  



						<div class="form-group">
							<div class="col-md-12">  
							</br></br>
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Kirim Barang', array('class' => 'btn btn-info pull-right')); ?>
						</div>
					</div>

					<?php $this->endWidget(); ?>

</div></div><!-- form -->