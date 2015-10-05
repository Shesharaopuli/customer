<?php
/* @var $this CustomerController */
/* @var $model CustomerModel */

$this->breadcrumbs=array(
	'Customer Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomerModel', 'url'=>array('index')),
	array('label'=>'Manage CustomerModel', 'url'=>array('admin')),
);
?>

<h1>Create CustomerModel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>