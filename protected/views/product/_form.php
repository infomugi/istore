<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-6 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'product-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'code'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'code'); ?>
							<?php echo $form->textField($model,'code',array(
							'class'=>'form-control',
							'value' => (($model->isNewRecord) ? $model->generateB() : $model->code),
							'readOnly'=>true
							)); ?>
						</div>
		
				</div>  

				
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
							<?php echo $form->labelEx($model,'category_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'category_id'); ?>
							<?php echo $form->dropDownList($model,'category_id',
								CHtml::listData(Category::model()->findAll(array('condition'=>'',
								'order'=>'name ASC')),'id_category', 'name'),
								array(
									'prompt'=>'-- Category --.',
									'class'=>'form-control selectz',
									'ajax' => array(
										'type'=>'POST', 
										'url'=>Yii::app()->createUrl('tag/data'), 
										'update'=>'#Product_sub_category_id', 
										'data'=>array('category_id'=>'js:this.value'),
									))							
							); ?>						
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'sub_category_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'sub_category_id'); ?>
							<?php echo $form->dropDownList($model, "sub_category_id",
										array(),
										array("empty"=>"-- Tag --", 'class'=>'form-control')
										); ?> 
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'color'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'color'); ?>
							<?php echo $form->textField($model,'color',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'status'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'status'); ?>
							<?php echo $form->radioButtonList($model, 'status', array(1 => 'Active', 0 => 'Deactive'), array('separator' => ' | ')); ?>							
							<?php echo $form->textField($model,'status',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				<script language='javascript'>
					function validAngka(a)
					{
						if(!/^[0-9.]+$/.test(a.value))
						{
						a.value = a.value.substring(0,a.value.length-1000);
						}
					}
				</script>				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'stock'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'stock'); ?>
							<?php echo $form->textField($model,'stock',array('class'=>'form-control','onkeyup'=>"validAngka(this)")); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'spesification'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'spesification'); ?>
							<?php echo $form->textArea($model,'spesification',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'weight'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'weight'); ?>
							<?php echo $form->textField($model,'weight',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'brand_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'brand_id'); ?>
							<?php echo $form->textField($model,'brand_id',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<!-- <div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'views'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'views'); ?>
							<?php echo $form->textField($model,'views',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'likes'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'likes'); ?>
							<?php echo $form->textField($model,'likes',array('class'=>'form-control')); ?>
						</div>
		
				</div>  --> 

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'discount'); ?>
						</div>   
						<?php 
							$Disc = array(
								"0" => "None",
								"10"	=> "10%",
								"15"	=> "15%",
								"30"	=> "30%",

								);
						?>
						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'discount'); ?>
							<?php echo $form->dropDownList($model, "discount",$Disc,
									array("promopt"=>"-- Discount --","class" => 'form-control',)
									); ?>
						</div>
		
				</div>  

				
				<!-- <div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'created_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'created_id'); ?>
							<?php echo $form->textField($model,'created_id',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'update_id'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'update_id'); ?>
							<?php echo $form->textField($model,'update_id',array('class'=>'form-control')); ?>
						</div>
		
				</div>  --> 

				
<!-- 				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'created_date'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'created_date'); ?>
							<?php echo $form->textField($model,'created_date',array('class'=>'form-control')); ?>
						</div>
		
				</div>   -->

				
<!-- 				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'update_date'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'update_date'); ?>
							<?php echo $form->textField($model,'update_date',array('class'=>'form-control')); ?>
						</div>
		
				</div>   -->

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'keyword'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'keyword'); ?>
							<?php echo $form->textField($model,'keyword',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'abstrack'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'abstrack'); ?>
							<?php echo $form->textField($model,'abstrack',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<!-- <div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'sales'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'sales'); ?>
							<?php echo $form->textField($model,'sales',array('class'=>'form-control')); ?>
						</div>
		
				</div>  

				
				<div class="form-group">
	
						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'rate'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'rate'); ?>
							<?php echo $form->textField($model,'rate',array('class'=>'form-control')); ?>
						</div>
		
				</div>  --> 

							<div class="form-group">
				<div class="col-md-12">  
				</br></br>
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info pull-right')); ?>
			</div>
		</div>

		<?php $this->endWidget(); ?>

</div></div><!-- form -->