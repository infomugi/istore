<?php

class ProductController extends Controller
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
			// 'postOnly + delete', // we only allow deletion via POST request
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
			array('allow',
				'actions'=>array('detail','index'),
				'users'=>array('*'),
				),
			array('allow',
				'actions'=>array('view','detail'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==2',
				),			
			array('allow',
				'actions'=>array('create','update','view','delete','admin','image'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->record->level==1',
				),
			array('deny',
				'actions'=>array('create','update','view','delete','admin'),
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
	
	public function actionDetail($id)
	{
		$this->layout = "front_page";
		$this->render('detail',array(
			'model'=>$this->loadModel($id),
			));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Product;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];

			$model->created_date = date('Y-m-d h:i:s');
			$model->update_date = date('Y-m-d h:i:s');
			$model->created_id=YII::app()->user->id;
			$model->update_id=YII::app()->user->id;
			$model->rate = 0;
			$model->sales = 0;
			$model->views = 0;
			$model->likes = 0;
			$model->brand_id = 1;

			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=Product::model()->seo($model->name).'.'.$tmp->extensionName; 
			}

			if($model->save())
			{
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/product/big/'.$model->image);
				}

				$this->redirect(array('view','id'=>$model->id_product));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			));
	}

	public function actionOrder($product_id)
	{
		$model=new Order;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Order']))
		{
			$model->attributes=$_POST['Order'];
			$model->product_id=$product_id;
			$model->
			$model->image=CUploadedFile::getInstance($model,'image');
			if($model->save())
			{
				$this->redirect(array('view','id'=>$model->id_product));
			}
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

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			$model->update_id=YII::app()->user->id;
			$model->update_date=date('Y-m-d h:i:s');
			if($model->save())
			{	
				$this->redirect(array('view','id'=>$model->id_product));
			}
		}
		$this->render('update',array(
			'model'=>$model,
			));
	}


	public function actionImage($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Product']))
		{
			$model->attributes=$_POST['Product'];
			$model->update_date=date('Y-m-d h:i:s');
			$model->update_id=YII::app()->user->id;

			$tmp;
			if(strlen(trim(CUploadedFile::getInstance($model,'image'))) > 0) 
			{ 
				$tmp=CUploadedFile::getInstance($model,'image'); 
				$model->image=Product::model()->seo($model->name).'.'.$tmp->extensionName; 
			}

			if($model->save())
			{	
				if(strlen(trim($model->image)) > 0) {
					$tmp->saveAs(Yii::getPathOfAlias('webroot').'/image/product/big/'.$model->image);
				}
				$this->redirect(array('view','id'=>$model->id_product));
			}
		}
		$this->render('image',array(
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

public function actionLikes($id)
	{
		$model= $this->loadModel($id);
		if($model != null)
		{

			$model->likes += 1;		
			$model->save();

			if($model->save()){
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('Product/detail','id'=>$id));

			}
		}
		else{
			$this->actionIndex();
		}
	}	


	public function actionViews($id)
	{
		$model= $this->loadModel($id);
		if($model != null)
		{

			$model->views += 1;		
			$model->save();

			if($model->save()){
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('Product/detail','id'=>$id));

			}
		}
		else{
			$this->actionIndex();
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Product');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	public function actionSale()
	{
		$dataProvider=new CActiveDataProvider('Product',array('criteria'=>'condition'));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}	

	public function actionPopular()
	{
		$dataProvider=new CActiveDataProvider('Product');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}		

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Product('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Product']))
			$model->attributes=$_GET['Product'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Product the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Product::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Product $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='product-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
