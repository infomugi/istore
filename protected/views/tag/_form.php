<?php
/* @var $this TagController */
/* @var $model Tag */
/* @var $form CActiveForm */
?>


<div class="form-normal form-horizontal clearfix">
	<div class="col-lg-6 col-xs-12"> 

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'tag-form',
			'enableAjaxValidation'=>false,
			)); ?>

			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-warning')); ?>

			
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
						<?php echo $form->labelEx($model,'name'); ?>
					</div>   

					<div class="col-lg-8 col-md-9 col-xs-12">
						<?php echo $form->error($model,'name'); ?>
						<?php echo $form->textField($model,'name',array('class'=>'form-control')); ?>
					</div>

				</div>  

				<?PHP if(!$model->isNewRecord): ?>
				<div class="form-group">

					<div class="col-lg-4 col-md-3 col-xs-12 control-label">
						<?php echo $form->labelEx($model,'status'); ?>
					</div>   

					<div class="col-lg-8 col-md-9 col-xs-12">
						<?php echo $form->error($model,'status'); ?>
						<?php
						echo $form->radioButtonList($model,'status',
							array('1'=>'Enable','0'=>'Disable'),
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
				<?php endif; ?>

				<div class="form-group">
					<div class="col-md-12">  
					</br></br>
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Edit', array('class' => 'btn btn-info pull-right')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

</div></div><!-- form -->