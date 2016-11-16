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
					<?php echo $form->labelEx($model,'code'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'code'); ?>
					<?php echo $form->textField($model,'code',array('class'=>'form-control','value'=>'SKU'.rand(10000,50000),'readonly'=>true)); ?>
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
					<?php echo $form->labelEx($model,'image'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php echo $form->error($model,'image'); ?>
					<?php echo $form->fileField($model,'image',array('class'=>'form-control')); ?>
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
					<?php 
					echo $form->dropDownList($model, "category_id",
						CHtml::listData(Category::model()->findAll(array('condition'=>'','order'=>'name ASC')),
								'id_category', 'name'
								),
							array(
								'prompt'=>'-- Category --.',
								'class'=>'form-control selectz',
								'ajax' => array(
									'type'=>'POST', 
									'url'=>Yii::app()->createUrl('tag/data'), 
									'update'=>'#Product_sub_category_id', 
									'data'=>array('category_id'=>'js:this.value'),
									))
						); 
						?> 
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
							<?php echo $form->labelEx($model,'price'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'price'); ?>
							<div class="input-group">
				                 <span class="input-group-addon">Rp.</span>
				                <?php echo $form->textField($model,'price',array('class'=>'form-control','onkeyup'=>"validAngka(this)",'maxlength'=>12)); ?>
				            </div>    
						</div>

					</div>  

					<div class="form-group">

						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'color'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">
							<?php echo $form->error($model,'color'); ?>
							<?php 
							echo $form->dropDownList($model, "color",
								array('1'=>'White','2'=>'Red','3'=>'Blue','4'=>'Green','5'=>'Yellow','6'=>'Brown'),
								array("empty"=>"-- Color --", 'class'=>'select2 form-control')
								); 
								?> 
							</div>

						</div>  


						<div class="form-group">

							<div class="col-lg-4 col-md-3 col-xs-12 control-label">
								<?php echo $form->labelEx($model,'status'); ?>
							</div>   

							<div class="col-lg-8 col-md-9 col-xs-12">
								<?php echo $form->error($model,'status'); ?>
							<?php 
							echo $form->dropDownList($model, "status",
								array('0'=>'Hide','1'=>'New','2'=>'Sold','3'=>'Sale'),
								array("empty"=>"-- Status --", 'class'=>'select2 form-control')
								); 
								?> 
							</div>

						</div>  


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
								<div class="input-group">
								<?php echo $form->textField($model,'weight',array('class'=>'form-control','onkeyup'=>"validAngka(this)")); ?>
								<span class="input-group-addon">Kg</span>
								</div>
							</div>

						</div>  


						<div class="form-group">

							<div class="col-lg-4 col-md-3 col-xs-12 control-label">
								<?php echo $form->labelEx($model,'discount'); ?>
							</div>   

							<div class="col-lg-8 col-md-9 col-xs-12">
								<?php echo $form->error($model,'discount'); ?>
							<div class="input-group">
				                <?php echo $form->textField($model,'discount',array('class'=>'form-control','onkeyup'=>"validAngka(this)",'maxlength'=>3)); ?>
				                <span class="input-group-addon">%</span>
				            </div>	
								
							</div>

						</div>  


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


						<div class="form-group">
							<div class="col-md-12">  
							</br></br>
							<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info pull-right')); ?>
						</div>
					</div>

					<?php $this->endWidget(); ?>

</div></div><!-- form -->
								<script language='javascript'>
								function validAngka(a)
								{
									if(!/^[0-9.]+$/.test(a.value))
									{
									a.value = a.value.substring(0,a.value.length-1000);
									}
								}
								</script>