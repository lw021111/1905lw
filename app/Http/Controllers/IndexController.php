<?php

namespace App\Http\Controllers;
use DB;
use App\Detail;
use Illuminate\Http\Request;
use App\Tool\Sms;
class IndexController extends Controller
{
	//注册页
	public function register(){
		return view('login.register');
	}
	//注册
	public function register_do(){
		$data=request()->all();
		$code=session('code');
		//echo $code.PHP_EOL;
		if($code!=$data['code']){
			echo "验证码错误";
            header("Refresh:1;url=register");die;
		}
		$info=DB::table('user')->insert(['user_tel'=>$data['user_tel'],'password'=>$data['password']]);
		if($info){
			echo "注册成功";
			header("Refresh:2;url=/");die;
		}else{
			echo "注册失败";die;
		}
	}
    //验证码
	public function sendSms(){
		//if(!empty(session('code'))){
			request()->session()->flush();
		// }
		$phone=request()->user_tel;
		$code=rand(1111,9999);
		$res=Sms::sendSms($phone,$code);
		session(['code'=>$code]);
		if($res==true){
			echo json_encode(['code'=>200,'message'=>'发送成功']);die;
		}
	}
	//登录页
    public function login(){
    	return view('login.login');
    }
    //登陆
    public function login_do(){
    	$data=request()->POST();
    	//$username=request()->post("username");
    	$info=DB::table('user')->where($data)->first();
    	if(!empty($info)){
            echo "登陆成功";
            header("Refresh:1;url=/");die;
    		//return view("index/index",['username'=>$username]);
    	}
    	echo '账号或密码错误,清重新登陆';
    	header("Refresh:1;url=login");die;
    }
    //首页
    public function index(){
    	$data=Detail::orderBy('num','desc')->limit(5)->get()->toarray();
    	//dd($data);
    	return view('index.index',['data'=>$data]);
    }
    //搜索
    public function search(){
    	$data=request()->all();
    	$res=Detail::where($data['list'],'like','%'.$data['type'].'%')->first();
    	if(!empty($res)){
    		$num=$res['num']+1;
    		$info=Detail::where('id',$res['id'])->update(['num'=>$num]);
    		return view('index.detail',['res'=>$res]);
    	}else{
    		return view('index.search');
    	}
    }






 	public function ma(){
    	return view('login.ma');
    }
    public function aouth(){
    	return view('login.aouth');
    }




}
