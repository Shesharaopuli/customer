<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Models',
);

$this->menu=array(
	array('label'=>'Create ProductModel', 'url'=>array('create')),
	array('label'=>'Manage ProductModel', 'url'=>array('admin')),
);
?>

<h1>Product Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
