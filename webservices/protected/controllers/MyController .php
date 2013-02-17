<?php
 
class MyController extends Controller
{
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


  public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
	return "deneme";
	}

}
?>