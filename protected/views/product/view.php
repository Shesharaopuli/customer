<?php
/* @var $this ProductController */
/* @var $model ProductModel */

$this->breadcrumbs=array(
	'Product Models'=>array('index'),
	$model->product_id,
);

$this->menu=array(
	array('label'=>'List ProductModel', 'url'=>array('index')),
	array('label'=>'Create ProductModel', 'url'=>array('create')),
	array('label'=>'Update ProductModel', 'url'=>array('update', 'id'=>$model->product_id)),
	array('label'=>'Delete ProductModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->product_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductModel', 'url'=>array('admin')),
);
?>

<h1>View Products #<?php echo $model->product_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'product_id',
		'product_name',
		'product_price',
		'product_shipping_price',
	),
)); ?>
