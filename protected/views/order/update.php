<?php
/* @var $this OrderController */
/* @var $model OrderModel */

$this->breadcrumbs=array(
	'Order Models'=>array('index'),
	$model->order_id=>array('view','id'=>$model->order_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderModel', 'url'=>array('index')),
	array('label'=>'Create OrderModel', 'url'=>array('create')),
	array('label'=>'View OrderModel', 'url'=>array('view', 'id'=>$model->order_id)),
	array('label'=>'Manage OrderModel', 'url'=>array('admin')),
);
?>

<h1>Update OrderModel <?php echo $model->order_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>