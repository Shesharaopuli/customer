<?php
/* @var $this OrderController */
/* @var $data OrderModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->order_id), array('view', 'id'=>$data->order_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_product_id')); ?>:</b>
	<?php echo CHtml::encode($data->order_product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->order_customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_amount')); ?>:</b>
	<?php echo CHtml::encode($data->order_amount); ?>
	<br />


</div>