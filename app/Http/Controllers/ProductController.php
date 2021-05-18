<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
    	$product=Product::all();
    	return view('product',["productdata"=>$product]);
    }
    function detail($id){
    	$data= Product::find($id);
    	return view('detail',["product"=>$data]);

    }
    function search(Request $req){
    	$data= Product::where('name','like','%'.$req->input('query').'%')->get();
    	return view('search',["productdata"=>$data]);


    }
    function addtocart(Request $req){
        if($req->session()->has('user')){
           $cart = new Cart;
           $cart->user_id=$req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('home');
        }
        else
        {
            return redirect('/login');
        }

    }


    static function cartItem(){
        $userid = Session::get('user')['id'];
        return Cart::where('user_id',$userid)->count();
    }

    function cartList(){
         $userid = Session::get('user')['id'];
        $data = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userid)
        ->get();
        return view('cartlist',["product"=>$data]);

        
    }
    function remove($id){
        Cart::destroy($id);
        return redirect('cartlist');

    }
    function orderNow(){
        $userid = Session::get('user')['id'];
        $data = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userid)
        ->sum('products.price');
        return view('ordernow',["total"=>$data]);

    }
    function orderPlace(Request $req){
         $userid = Session::get('user')['id'];
         $allCart =Cart::where('user_id',$userid)->get();
         foreach ($allCart as $cart) {
             $order = new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->address=$req->address;
             $order->status='pending';
             $order->payment_method=$req->payment;
             $order->payment_status='pending';
             $order->save();

         }
         Cart::where('user_id',$userid)->delete();
         return redirect('home');

    }
    function Orders(){
         $userid = Session::get('user')['id'];
         $data = DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userid)
        ->get();
        return view('orders',["collection"=>$data]);

    }

}
