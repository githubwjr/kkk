<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
	//首页
	public function index()
	{
		$data='fxs';
		return view('index.index',['name'=>$data]);
	}
	//直播
	public function show(){
		$rs=DB::select("select * from huya_type where type_status=:status",['status'=>1]);
		$data=$this->cate($rs);
		return view("index.show",['data'=>$data]);
	}
	//多级分类
	public function cate($list,$pk='type_id',$pid='parent_id',$child='_child',$root=0){
		$tree=array();
	    $packData=array();
	    foreach ($list as  $data) {
	        $packData[$data[$pk]] = $data;
	    }
	    foreach ($packData as $key =>$val){     
	        if($val[$pid]==$root){//代表跟节点       
	            $tree[]=& $packData[$key];
	        }else{
	            //找到其父类
	            $packData[$val[$pid]][$child][]=& $packData[$key];
	        }
	    }
	    return $tree;
	}
	//分类
	public function category(){
		$rs=DB::select("select * from huya_type where type_status=:status",['status'=>1]);
		$data=$this->cate($rs);
		$res=DB::select("select * from huya_type where parent_id>:pid",['pid'=>0]);
		return view('index.category',['data'=>$data,'cate'=>$res]);
	}
}