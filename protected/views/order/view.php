<?php
/* @var $this OrderController */
/* @var $model OrderModel */

$this->breadcrumbs=array(
	'Order Models'=>array('index'),
	$model->order_id,
);

$this->menu=array(
	array('label'=>'List OrderModel', 'url'=>array('index')),
	array('label'=>'Create OrderModel', 'url'=>array('create')),
	array('label'=>'Update OrderModel', 'url'=>array('update', 'id'=>$model->order_id)),
	array('label'=>'Delete OrderModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->order_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderModel', 'url'=>array('admin')),
);
?>

<h1>You Order is Successfull!!<br>Your Order ID #<?php echo $model->order_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'order_id',
		'order_product_id',
		'order_customer_id',
		'order_amount',
	),
)); ?>
