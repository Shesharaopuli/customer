<?php
/* @var $this OrderController */
/* @var $model OrderModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-model-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'order_product_id'); ?>
		<?php echo $form->textField($model,'order_product_id'); ?>
		<?php echo $form->error($model,'order_product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_customer_id'); ?>
		<?php echo $form->textField($model,'order_customer_id'); ?>
		<?php echo $form->error($model,'order_customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_amount'); ?>
		<?php echo $form->textField($model,'order_amount',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'order_amount'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->