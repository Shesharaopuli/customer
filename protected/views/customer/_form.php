<?php
/* @var $this CustomerController */
/* @var $model CustomerModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'customer-model-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_firstname'); ?>
		<?php echo $form->textField($model,'customer_firstname',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'customer_firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_email'); ?>
		<?php echo $form->textField($model,'customer_email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'customer_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_password'); ?>
		<?php echo $form->textField($model,'customer_password',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'customer_password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->