<?php
/* @var $this CustomerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Customer Models',
);

$this->menu=array(
	array('label'=>'Create CustomerModel', 'url'=>array('create')),
	array('label'=>'Manage CustomerModel', 'url'=>array('admin')),
);
?>

<h1>Customer Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
