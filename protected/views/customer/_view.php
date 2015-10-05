<?php
/* @var $this CustomerController */
/* @var $data CustomerModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->customer_id), array('view', 'id'=>$data->customer_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_firstname')); ?>:</b>
	<?php echo CHtml::encode($data->customer_firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_email')); ?>:</b>
	<?php echo CHtml::encode($data->customer_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_password')); ?>:</b>
	<?php echo CHtml::encode($data->customer_password); ?>
	<br />


</div>