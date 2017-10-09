<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
class InfoController extends Controller{
	//我的信息
	public function info(){
		$username=Session::get('user');
		
		
		if (!empty($username)) {
			$user_id=$username['user_id'];
			$er=DB::table('userinfo')->first();
			Session::put('info',$er);
			$year=$er['info_birthday']-date('Y-M-D');
			$location=DB::select("SELECT region_name from huya_region where region_id = ".$er['info_location']);

			$num=DB::table('money')->first();
			Session::put('money',$num);
			// print_r($num);die;
			$er['error']=1;
			$er['location']=$location[0]['region_name'];
			$er['age']=$year;
		}else{
			$er=array('error'=>0);
		}
		return view('info.info',['er'=>$er,'num'=>$num]);
	}

	//等级成长
	public function grade(){
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		return view('info.grade',['er'=>$er]);
	}
	//订阅与历史
	public function history(){
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		return view('info.history',['er'=>$er]);
	}
	public function message(){
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		return view('info.message',['er'=>$er]);
	}
	public function noble(){
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		return view('info.noble',['er'=>$er]);
	}
	public function title(){
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		return view('info.title',['er'=>$er]);
	}
	public function cdkey(){
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		return view('info.cdkey',['er'=>$er]);
	}

	public function estate(){
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		return view('info.estate',['er'=>$er]);
	}
	public function auth(){
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		return view('info.auth',['er'=>$er]);
	}
	public function edit(){
		$username=Session::get('user');
		if (!empty($username)) {
			$er=array('error'=>1);
		}else{
			$er=array('error'=>0);
		}
		return view('info.edit',['er'=>$er]);
	}
}





 ?>