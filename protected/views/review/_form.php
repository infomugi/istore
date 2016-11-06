<?php
/* @var $this ReviewController */
/* @var $model Review */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-6 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'review-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'date'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'date'); ?>
							<?php echo $form->textField($model,'date',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'customer_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'customer_id'); ?>
							<?php echo $form->textField($model,'customer_id',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'price'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'price'); ?>
							<?php echo $form->textField($model,'price',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'value'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'value'); ?>
							<?php echo $form->textField($model,'value',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'quality'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'quality'); ?>
							<?php echo $form->textField($model,'quality',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'summary'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'summary'); ?>
							<?php echo $form->textField($model,'summary',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'description'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'description'); ?>
							<?php echo $form->textArea($model,'description',array('class'=>'form-control')); ?>
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
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div></div><!-- form -->