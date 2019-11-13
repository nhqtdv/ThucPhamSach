<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use App\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function index(){
    	return view('admin_login');
    }
    public function show_dashboard(){
    	return view('admin.dashboard');
    }
    public function dashboard(Request $request){
    	$admin_email = $request->admin_email;
    	$admin_password = md5($request->admin_password);
    	$result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();

    // if (is_null($result)) 
    // {
    //  echo'<p align=center> Bạn đã nhập sai thông tin đăng nhập! </p>';
    // return view('admin_login');
    //  } 
    // else {
    // return view('admin.dashboard');
    //  } 
    	if($result){
    		Session::put('admin_name',$result->admin_name);
    		Session::put('admin_id ', $result->admin_id);
    		return Redirect::to('/dashboard');
    	}
    	else{
    		Session::put('message','Bạn đã nhập sai thông tin đăng nhập !');
    		return Redirect::to('/admin');
    	}

}
     public function logout(){
     	    Session::put('admin_name',null);
            Session::put('admin_id ', null); 
            return Redirect::to('/admin');
            
         }
}
