<?php
/* @var $this OrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Order Models',
);

if (Utility::isAdmin()){
$this->menu=array(
	array('label'=>'Create OrderModel', 'url'=>array('create')),
	array('label'=>'Manage OrderModel', 'url'=>array('admin')),
);
}
?>

<h1>My Orders</h1>
<?php 
foreach ($dataProvider as $data){
    $this->renderPartial('_view', array('data'=>$data));
}

 ?>
