<?php
/* @var $this ProductController */
/* @var $model ProductModel */

$this->breadcrumbs=array(
	'Product Models'=>array('index'),
	'Create',
);
if (Utility::isAdmin()){
$this->menu=array(
	array('label'=>'List ProductModel', 'url'=>array('index')),
	array('label'=>'Manage ProductModel', 'url'=>array('admin')),
);
}
?>

<h1>Create ProductModel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>