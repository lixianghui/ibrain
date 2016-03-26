<?php
/**
* 首页控制器
*/
namespace app\controllers;
use yii\web\Controller;

class IndexController extends Controller
{
	
	public function actionIndex()
	{	
		$param=\YII::$app->request->get();
		var_dump($param);
		echo "Hello World!";
	}
}