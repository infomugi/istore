<?php
/* @var $this BankController */
/* @var $model Bank */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-6 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'bank-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'name'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'name'); ?>
							<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'code'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'code'); ?>
							<?php echo $form->textField($model,'code',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'branch'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'branch'); ?>
							<?php echo $form->textField($model,'branch',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'status'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'status'); ?>
							<?php echo $form->textField($model,'status',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'user_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'user_id'); ?>
							<?php echo $form->textField($model,'user_id',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'verification_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'verification_id'); ?>
							<?php echo $form->textField($model,'verification_id',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'date_created'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'date_created'); ?>
							<?php echo $form->textField($model,'date_created',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'date_verification'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'date_verification'); ?>
							<?php echo $form->textField($model,'date_verification',array('class'=>'form-control')); ?>
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