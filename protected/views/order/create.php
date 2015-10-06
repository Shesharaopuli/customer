<?php
/* @var $this OrderController */
/* @var $model OrderModel */

$this->breadcrumbs=array(
	'Order Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderModel', 'url'=>array('index')),
	array('label'=>'Manage OrderModel', 'url'=>array('admin')),
);
?>

<h1>Create OrderModel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>