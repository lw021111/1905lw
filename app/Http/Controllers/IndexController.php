<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	//注册页
	public function register(){
		return view('login.register');
	}
	//注册
	public function register_do(){
		$data=request()->all();
		//$username=request()->username;
		//$password=request()->password;
		$info=DB::table('user')->insert($data);
		if($info){
			//$tel=DB::table('user')->where('username'=>$username)->select();
			
			echo "注册成功";
			header("Refresh:2;url=/");die;
		}else{
			echo "注册失败";die;
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
