<?php
/**
* Created by PhpStorm.
* User: jinlei
* Date: 2017/5/10
* Time: 9:35
*/

namespace frontend\models;
use yii\base\Model;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

class Form extends Model
{
	public $user_name;
	public $user_pwd;
	public $user_YY;
	public $user_phone;
	public $user_email;
	public function rules(){
		return[

		];
	}
	public function attributeLabels(){
		return[
		'user_name'=>'用户名',
		'user_pwd'=>'密码',
		'user_YY'=>'YY号',
		'user_phone'=>'手机号',
		'user_email'=>'邮箱'
		];
	}
	static public function dataarr($data){
	$arr = array();
	foreach($data as $key=>$value){
	$arr[$value['user_id']] = $value['user_name'];
	}
	print_r($arr);die;
	return $arr;
	}
}