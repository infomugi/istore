<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
				),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
				),
			);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->layout = "front_page";
		$this->render('index');
	}

	public function actionDashboard()
	{	
		if(YII::app()->user->isGuest){
			$this->actionLogin();
		}else{

			$this->layout = "back_page";
			$dataProvider1=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=0 AND month(date_order)='.date('m').'','order'=>'date_order DESC')));
			$dataProvider2=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=1 AND month(date_order)='.date('m').'','order'=>'date_order DESC')));
			$dataProvider3=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=2 AND month(date_order)='.date('m').'','order'=>'date_order DESC')));
			$dataProvider4=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=3 AND month(date_order)='.date('m').'','order'=>'date_order DESC')));
			$dataProvider5=new CActiveDataProvider('Transaction',array('criteria'=>array('condition'=>'status=4 AND month(date_order)='.date('m').'','order'=>'date_order DESC')));

			$this->render('dashboard',array(
				'dataProvider1'=>$dataProvider1,
				'dataProvider2'=>$dataProvider2,
				'dataProvider3'=>$dataProvider3,
				'dataProvider4'=>$dataProvider4,
				'dataProvider5'=>$dataProvider5,
				));
		}
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		$this->layout = "error";
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
				"Reply-To: {$model->email}\r\n".
				"MIME-Version: 1.0\r\n".
				"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->layout="signin";		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				//$userid,$description,$activityid,$type,$point,$status
				Activities::model()->my(YII::app()->user->id,"Login dari IP : ".Yii::app()->request->getUserHostAddress(),1,1,3,0);
			if(Yii::app()->user->getLevel()==1){
				Yii::app()->user->setFlash('Success', 'Berhasil login dari IP '.Yii::app()->request->getUserHostAddress().'');
				$this->redirect('index.php?r=site/dashboard');
				// $this->redirect(Yii::app()->user->returnUrl);
			}else if(Yii::app()->user->getLevel()==2){
				Yii::app()->user->setFlash('success', 'Berhasil login dari IP '.Yii::app()->request->getUserHostAddress().'. - Login Terakhir : '.YII::app()->user->record->last_login);
				$this->redirect('index.php?r=user/view&id='.YII::app()->user->id);
			}else{
				$this->redirect('index.php?r=site/login');
			}
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		// //$userid,$description,$activityid,$type,$point,$status
		// Activities::model()->my(YII::app()->user->id,"Logout dari IP : ".Yii::app()->request->getUserHostAddress(),0,0,0,0);
		// $model=User::model()->findByPk(YII::app()->user->id);
		// $model->visit_time = date('Y-m-d h:i:s');
		// $model->update();
		Yii::app()->user->logout();
		$this->redirect('index.php?r=site/login');
	}

	public function actionView($id)
	{
		$this->redirect(array('transaction/view','id'=>$id));
	}	
}