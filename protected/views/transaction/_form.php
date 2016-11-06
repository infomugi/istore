<?php
/* @var $this TransactionController */
/* @var $model Transaction */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-6 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'transaction-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'code'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'code'); ?>
							<?php echo $form->textField($model,'code',array('size'=>25,'maxlength'=>25)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'date_order'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'date_order'); ?>
							<?php echo $form->textField($model,'date_order'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'date_confirmation'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'date_confirmation'); ?>
							<?php echo $form->textField($model,'date_confirmation'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'date_verification'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'date_verification'); ?>
							<?php echo $form->textField($model,'date_verification'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'customer_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'customer_id'); ?>
							<?php echo $form->textField($model,'customer_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'confirmation_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'confirmation_id'); ?>
							<?php echo $form->textField($model,'confirmation_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'verification_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'verification_id'); ?>
							<?php echo $form->textField($model,'verification_id'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'payment_method'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'payment_method'); ?>
							<?php echo $form->textField($model,'payment_method'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'payment_total'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'payment_total'); ?>
							<?php echo $form->textField($model,'payment_total'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'payment_file'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'payment_file'); ?>
							<?php echo $form->textField($model,'payment_file',array('size'=>60,'maxlength'=>255)),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'shipping_type'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'shipping_type'); ?>
							<?php echo $form->textField($model,'shipping_type'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'shipping_brand'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'shipping_brand'); ?>
							<?php echo $form->textField($model,'shipping_brand'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'shipping_code'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'shipping_code'); ?>
							<?php echo $form->textField($model,'shipping_code'),array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'status'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'status'); ?>
							<?php echo $form->textField($model,'status'),array('class'=>'form-control')); ?>
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