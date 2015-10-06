<?php
/* @var $this OrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Order Models',
);

$this->menu=array(
	array('label'=>'Create OrderModel', 'url'=>array('create')),
	array('label'=>'Manage OrderModel', 'url'=>array('admin')),
);
?>

<h1>My Orders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
