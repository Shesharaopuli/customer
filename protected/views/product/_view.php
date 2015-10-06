<?php
/* @var $this ProductController */
/* @var $data ProductModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->product_id), array('view', 'id'=>$data->product_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_name')); ?>:</b>
	<?php echo CHtml::encode($data->product_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_price')); ?>:</b>
	<?php echo CHtml::encode($data->product_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_shipping_price')); ?>:</b>
	<?php echo CHtml::encode($data->product_shipping_price); ?>
	<br />


</div>