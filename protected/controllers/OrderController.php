<?php

class OrderController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('OrderIt'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','OrderIt','index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','OrderIt','index','view'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new OrderModel;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['OrderModel']))
		{
			$model->attributes=$_POST['OrderModel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->order_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['OrderModel']))
		{
			$model->attributes=$_POST['OrderModel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->order_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$customerid=$_SESSION['customerid'];
		
		$dataProvider=OrderModel::model()->findAllByAttributes(array('order_customer_id'=> $customerid)) ;
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new OrderModel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['OrderModel']))
			$model->attributes=$_GET['OrderModel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return OrderModel the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=OrderModel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	/**
	 * Function for orderit
	 */
	public function actionOrderIt()
	{
		$model=new OrderModel;
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
	
		if(isset($_POST))
		{
			//$model->attributes=$_POST['BookingModel'];
			$model->order_product_id=$_POST['product_id'];
			
			$model->order_customer_id=Yii::app()->session['customerid'];
			$model->order_amount=$_POST['product_price']+$_POST['product_shipping_price'];
			$name=Yii::app()->session['customername'];
			$to = Yii::app()->session['customeremail'];
			$subject = "You Order is Success";
			$params = array('model'=>$model,'name'=>$name,'actualprice'=>$_POST['product_price'],'shippingprice'=>$_POST['product_shipping_price']);
			$from = "pshesharaoram@gmail.com" ;
			
			Utility::SendMail('test', $to, $subject, $params,$from);
			
			if($model->save()){
				
				$this->redirect(array('view','id'=>$model->order_id));
			}
		}
	
	
	}
	
	
	/**
	 * Performs the AJAX validation.
	 * @param OrderModel $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='order-model-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
