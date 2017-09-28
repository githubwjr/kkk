<?php
/**
* Created by PhpStorm.
* User: jinlei
* Date: 2017/5/10
* Time: 9:39
*/

namespace frontend\controllers;
use yii\web\Controller;
use yii;
use db;
use frontend\models\Form;
class IndexController extends Controller
{
	public function actionIndex(){
		$sql = 'select user_id,user_name,user_phone,user_email,user_yy,user_status from huya_user';
		$data = yii::$app->db->createCommand($sql)->queryAll();

		$arr = Form::dataarr($data);
		$model = new Form();

		// var_dump($data);die;
		return $this->render('index',['model'=>$model,'data'=>$arr]);
	}
	public function actionAdd_do(){
		$data = Yii::$app->request->post();
		echo $data;
	}

	public function actionAdd()
	{
		return $this->render('add');
	}

	public function actionDoc()
	{
		// return $this->render('add');
		echo 2;die;
	}



}