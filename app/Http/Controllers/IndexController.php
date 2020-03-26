<?php

namespace App\Http\Controllers;
use DB;
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
		// if($data['code']!=$code){
		// 	echo "验证码错误";die;
		// }
		$info=DB::table('user')->insert(['user_tel'=>$data['user_tel'],'password'=>$data['password']]);
		if($info){
			echo "注册成功";
			header("Refresh:2;url=/");die;
		}else{
			echo "注册失败";die;
		}
	}

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
    	$username=request()->post("username");
    	$info=DB::table('user')->where($data)->first();
    	if(!empty($info)){
    		return view("index/index",['username'=>$username]);
    	}
    	echo '账号或密码错误,清重新登陆';
    	header("Refresh:1;url=/");die;
    }

    public function ma(){
    	return view('login.ma');
    }

    public function index(){
    	return view('index.index');
    }
    public function aouth(){
    	return view('login.aouth');
    }




}
