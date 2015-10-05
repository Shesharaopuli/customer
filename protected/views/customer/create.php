<?php
/* @var $this CustomerController */
/* @var $model CustomerModel */

$this->breadcrumbs=array(
	'Customer Models'=>array('index'),
	'Create',
);


?>

<h1>Customer registration</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>