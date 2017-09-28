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
class LoginController extends Controller
{
	public function actionLogin(){
		return $this->render('login');
	}
	public function actionLogin_do(){
		echo 1;
	}
}