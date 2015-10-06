<?php
/* @var $this OrderController */
/* @var $model OrderModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'order_id'); ?>
		<?php echo $form->textField($model,'order_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_product_id'); ?>
		<?php echo $form->textField($model,'order_product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_customer_id'); ?>
		<?php echo $form->textField($model,'order_customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_amount'); ?>
		<?php echo $form->textField($model,'order_amount',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->