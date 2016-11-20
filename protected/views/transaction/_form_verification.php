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
				<?php echo $form->labelEx($model,'receiver'); ?>
				</div>   

				<div class="col-lg-8 col-md-9 col-xs-12">
					<?php $this->widget('zii.widgets.CDetailView', array(
						'data'=>$model,
						'htmlOptions'=>array("class"=>"table"),
						'attributes'=>array(
							array('name'=>'payment_total','value'=>Yii::app()->numberFormatter->format("Rp ###,###,###",$model->payment_total)),
							array('name'=>'payment_method','value'=>Transaction::model()->method($model->payment_method)),
							array('name'=>'payment_bank_id','value'=>$model->Receiver->name),
							),
							)); ?>	
						</div>

					</div>

					<div class="form-group">

						<div class="col-lg-4 col-md-3 col-xs-12 control-label">
							<?php echo $form->labelEx($model,'sender'); ?>
						</div>   

						<div class="col-lg-8 col-md-9 col-xs-12">



							<?php $this->widget('zii.widgets.CDetailView', array(
								'data'=>$model,
								'htmlOptions'=>array("class"=>"table"),
								'attributes'=>array(
									'date_confirmation',
									array('name'=>'confirmation_id','value'=>$model->Confirmation->fullname),
									array('name'=>'payment_bank_name','value'=>$model->Sender->name),
									array('name'=>'payment_bank_code','value'=>$model->payment_bank_code),
									array('name'=>'payment_bank_branch','value'=>$model->payment_bank_branch),
									array('name'=>'payment_bank_pay','value'=>Yii::app()->numberFormatter->format("Rp ###,###,###",$model->payment_bank_pay)),
									'payment_file',
									),
									)); ?>	

								</div>

							</div>

							<div class="form-group">

								<div class="col-lg-4 col-md-3 col-xs-12 control-label">
									<?php echo $form->labelEx($model,'verification_status'); ?>
								</div>   

								<div class="col-lg-8 col-md-9 col-xs-12">
									<?php echo $form->error($model,'verification_status'); ?>
									<?php
									echo $form->radioButtonList($model,'verification_status',
										array('1'=>'Valid','2'=>'Tidak Valid'),
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
									<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Verifikasi', array('class' => 'btn btn-info pull-right')); ?>
								</div>
							</div>

							<?php $this->endWidget(); ?>

						</div></div><!-- form -->

						<STYLE>
							th{width:150px;}
						</STYLE>