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
use yii\db\Query;
class IndexController extends Controller
{
	public function actionIndex(){
		$sql = 'select user_id,user_name,user_phone,user_email,user_yy,user_status from huya_user';
		$data = yii::$app->db->createCommand($sql)->queryAll();

		$arr = Form::dataarr($data);
		// print_r($arr);die;

		$model = new Form();


		// var_dump($data);die;
		return $this->render('index',['model'=>$model,'data'=>$arr]);
	}

	public function actionLogin()
	{
		$data = $_GET['call'];
		// print_r($data);die;
		$user = $_GET['name'];
		// print_r($user);die;
		$pwd = $_GET['password'];
		$query = new Query;
		// compose the query
		$res = $query->select('user_name,user_pwd')
		    ->from('huya_user')
		    ->where("user_name = '$user'")
		    // ->limit(10);
		    ->One();
		// print_r($res);die;
		if(!$res)
		{
			echo $data.'('.json_encode('找不到').')';
			// echo '不存在';
		}
		// else
		if($pwd == $res['user_pwd'])
		{
			echo $data.'('.json_encode(['code'=>200]).')';
			// echo '找到啦';
		}
		// print_r($res);
	}

	public function actionRzw()
	{
		$callback = $_GET['callback'];
		$name = $_GET['name'];
		$pwd = $_GET['pwd'];
		$sql = "select user_name,user_pwd from huya_user where user_name = '$name'";
		$res = yii::$app->db->createCommand($sql)->queryOne();
		// var_dump($res);die;
		if($res)
		{
			echo $callback.'('.json_encode(['code'=>'正确']).')';
		}
		else
		{
			echo $callback.'('.json_encode(['code'=>'错误']).')';
		}
		
	}


	public function actionAdd_do(){
		$data = Yii::$app->request->post();
		echo $data;
	}

	public function actionAdd()
	{
		return $this->render('add');
	}

	public function actionMy()
	{
		$arr = array(array('name'=>'王静茹','age'=>18,'sex'=>'woman'),array('name'=>'张三','age'=>16,'sex'=>'man'));
		// $this->actionp($arr);
		$res = array('code'=>200,'msg'=>$arr);

		$callback  = $_GET['callback'];
      // $data['callback'] = "起就试试";
      echo $callback.'('.json_encode($res).')';
	}

	public function actionError()
	{
		$list  = ['code'=>404];
		$callback  = $_GET['callback'];
		echo $callback.'('.json_encode($list).')';
	}

	public function actionP($arr)
	{
		var_dump($arr);
		echo "<br/>";
		print_r($arr);die;
	}

	public function actionType()
	{
		$call = isset($_GET['call'])?$_GET['call']:'';
		$sql = "select type_name,parent_id,type_status from huya_type";
		$list = yii::$app->db->createCommand($sql)->queryAll();
		echo $call.'('.json_encode($list).')';
	}



}