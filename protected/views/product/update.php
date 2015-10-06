<?php
/* @var $this ProductController */
/* @var $model ProductModel */

$this->breadcrumbs=array(
	'Product Models'=>array('index'),
	$model->product_id=>array('view','id'=>$model->product_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductModel', 'url'=>array('index')),
	array('label'=>'Create ProductModel', 'url'=>array('create')),
	array('label'=>'View ProductModel', 'url'=>array('view', 'id'=>$model->product_id)),
	array('label'=>'Manage ProductModel', 'url'=>array('admin')),
);
?>

<h1>Update ProductModel <?php echo $model->product_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>