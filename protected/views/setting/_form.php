<?php
/* @var $this SettingController */
/* @var $model Setting */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-6 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'setting-form',
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
							<?php echo $form->labelEx($model,'description'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'description'); ?>
							<?php echo $form->textArea($model,'description',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'keywords'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'keywords'); ?>
							<?php echo $form->textField($model,'keywords',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'favicon'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'favicon'); ?>
							<?php echo $form->textField($model,'favicon',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'logo'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'logo'); ?>
							<?php echo $form->textField($model,'logo',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'address'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'address'); ?>
							<?php echo $form->textArea($model,'address',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'phone'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'phone'); ?>
							<?php echo $form->textField($model,'phone',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'email'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'email'); ?>
							<?php echo $form->textField($model,'email',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'facebook'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'facebook'); ?>
							<?php echo $form->textField($model,'facebook',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'instagram'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'instagram'); ?>
							<?php echo $form->textField($model,'instagram',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'twitter'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'twitter'); ?>
							<?php echo $form->textField($model,'twitter',array('class'=>'form-control')); ?>
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