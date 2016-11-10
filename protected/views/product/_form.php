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
					<?php echo $form->textField($model,'code',array('class'=>'form-control')); ?>
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
					<?php 
					echo $form->dropDownList($model, "category_id",
						CHtml::listData(Category::model()->findAll(array('condition'=>'status=1')),
							'id_category', 'name'
							),
						array("empty"=>"-- Category --", 'class'=>'select2 form-control')
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
						<?php 
						echo $form->dropDownList($model, "sub_category_id",
							CHtml::listData(Tag::model()->findAll(array('condition'=>'status=1')),
								'id_category_sub', 'name'
								),
							array("empty"=>"-- Tag --", 'class'=>'select2 form-control')
							); 
							?> 
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
								array('Brown'=>'Brown','White'=>'White','Red'=>'Red','Blue'=>'Blue','Green'=>'Green','Yellow'=>'Yellow','Brown'=>'Brown'),
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
								array('New'=>'New','Sold'=>'Sold','Sale'=>'Sale'),
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
								<?php echo $form->textField($model,'stock',array('class'=>'form-control')); ?>
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
								<?php echo $form->labelEx($model,'discount'); ?>
							</div>   

							<div class="col-lg-8 col-md-9 col-xs-12">
								<?php echo $form->error($model,'discount'); ?>
								<?php echo $form->textField($model,'discount',array('class'=>'form-control')); ?>
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