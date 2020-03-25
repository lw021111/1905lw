<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
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
    	echo '账号或密码错误';
    	header("Refresh:1;url=/");die;
    }
    public function index(){
    	return view('index.index');
    }




}
