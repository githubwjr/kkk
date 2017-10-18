<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Session;

class EditController extends Controller
{
	public function input()
	{
//		require('dfa.php');
//		echo 2;die;
//		$msg = $_GET['msg'];
//		echo $msg;die;
//		echo $txt = Input::get('msg');die;

		//干扰因子集合
		$disturbList = ['&', '*','#'];

		//敏感词汇集合
		$data = ['19','大'];

		//实例化类
		$wordObj = new Dfa($disturbList);

		//添加敏感词汇
		$wordObj->addWords($data);

		// //要检测的文字
//		$txt = "1923456";
		$txt = Input::get('msg');
//		echo $txt;die;

		// //查找对应敏感词
		$words = $wordObj->search($txt);
		// print_r($words);

		//替换过后的文字显示
		$txt = $wordObj->filter($txt);
		echo $txt, "\n";

	}
	public function edit()
	{
		$user=Session::get('user');
//		$user_id = Session::get('user');
		$res=DB::table('userinfo')->where('user_id',$user['user_id'])->first();
//		print_r($res);die;
		if (!empty($user)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
//		print_r($er);die;
		return view('info.edit',['er'=>$er,'res'=>$res]);
	}
	public function edit_do()
	{

		$user = Session::get('user');
//		print_r($user_id);die;
//		$res=DB::table('userinfo')->where('user_id',$user_id)->first();
//		print_r($res);die;
		$data = $_POST;
//		print_r($data);
		$rs=DB::table('userinfo')->where('user_id',$user['user_id'])->update([
			'info_desc'=>$data['info_desc'],'info_head'=>$data['info_head']
		]);
		$res=DB::table('userinfo')->where('user_id',$user['user_id'])->first();
		Session::put('info',$res);
//		echo "<script>alert('修改成功');</script>";
		return redirect('info');
	}
}