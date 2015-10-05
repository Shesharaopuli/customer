<?php
/* @var $this CustomerController */
/* @var $model CustomerModel */

$this->breadcrumbs=array(
	'Customer Models'=>array('index'),
	$model->customer_id=>array('view','id'=>$model->customer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomerModel', 'url'=>array('index')),
	array('label'=>'Create CustomerModel', 'url'=>array('create')),
	array('label'=>'View CustomerModel', 'url'=>array('view', 'id'=>$model->customer_id)),
	array('label'=>'Manage CustomerModel', 'url'=>array('admin')),
);
?>

<h1>Update CustomerModel <?php echo $model->customer_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>