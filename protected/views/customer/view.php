<?php
/* @var $this CustomerController */
/* @var $model CustomerModel */

$this->breadcrumbs=array(
	'Customer Models'=>array('index'),
	$model->customer_id,
);

$this->menu=array(
	array('label'=>'List CustomerModel', 'url'=>array('index')),
	array('label'=>'Create CustomerModel', 'url'=>array('create')),
	array('label'=>'Update CustomerModel', 'url'=>array('update', 'id'=>$model->customer_id)),
	array('label'=>'Delete CustomerModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->customer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomerModel', 'url'=>array('admin')),
);
?>

<h1>View CustomerModel #<?php echo $model->customer_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'customer_id',
		'customer_firstname',
		'customer_email',
		'customer_password',
	),
)); ?>
