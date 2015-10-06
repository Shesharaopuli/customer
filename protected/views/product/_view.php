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

    <form method="post" action="<?php echo Yii::app()->createUrl("order/OrderIt"); ?>">
    <input type='hidden' name='product_id' value="<?php echo $data->product_id ?>">
    <input type='hidden' name='product_price' value=<?php echo $data->product_price ;?>>
    <input type='submit' value='Order Now'>
    </form>

</div>