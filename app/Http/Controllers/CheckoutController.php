<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
// use App\Http\Request;
use Illuminate\Support\Facades\Redirect;

session_start();

class CheckoutController extends Controller
{
    public function checkout(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    	$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
    	return view('pages.checkout.checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function save_checkout(Request $request){
    	$data = array();
    	$data['orders_name'] = $request->orders_name;
    	$data['orders_phone'] = $request->orders_phone;
    	$data['orders_email'] = $request->orders_email;
    	$data['orders_note'] = $request->orders_note;
    	$data['orders_address'] = $request->orders_address;

    	$orders_id = DB::table('tbl_orders')->insertGetId($data);
    	Session::put('orders_id',$orders_id);
    	return Redirect('/completed');
    	
    }
    public function payment(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
    	$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
    	return view('pages.checkout.checkout_completed')->with('category',$cate_product)->with('brand',$brand_product);

    }
}
