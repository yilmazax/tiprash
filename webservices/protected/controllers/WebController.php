<?php

class WebController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}


 public function actions() {
    return array(
      'service'=>array(
        'class'    => 'ext.GWebService.GSoapServerAction',
      ),
    );
  }

  /**
   * @param string $str Your name
   * @return string Hello you !
   * @soap
   */
  public function sayHello($str) {
    return 'Hello ' . $str . '!';
  }

public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','service'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('profile'),
				'users'=>array('@'),
			),
			 array('deny'),
	
		);
	}

	public function actionProfile()
	{
		$this->render('Profile');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}