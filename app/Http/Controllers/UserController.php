<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
    	$user= User::where(['email'=>$req->email])->first();
    	if(!$user || !Hash::check($req->password,$user->password) ){
    		return "Username or Password not Matched";
    	}
    	else{
    		$req->session()->put('user',$user);
    		return redirect('product');
    	}

    }
    function Register(Request $req){
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('login');

    }
   function adminLogin(Request $req)
   {
    $admin= Admin::where(['email'=>$req->email])->first();
        if(!$admin || !Hash::check($req->password,$admin->password) ){
            return "Username or Password not Matched";
        }
        else{
            $req->session()->put('user',$admin);
            return redirect('admin_home');
        }

   }
   function adminHome(){
    return view('admin_home');
   }

   function data(){
    $data=User::all();
    return view("admin_users_data",["users"=>$data]);
   }
   function ordersdata(){
    $data=Order::all();
    return view("orders_data",["users"=>$data]);


        }
    function Update($id){
        $data=  Order::find($id);
        return view('update',["collection"=>$data]);

    }
    function updatekr(Request $req){
        $data =  Order::find($req->id);
        $data->status=$req->status;
        $data->payment_status=$req->payment_status;
        $data->save();
        return redirect('admin_home');

    }
    function adminProducts(){
        $data = Product::all();
        return view('adminproduct',["data"=>$data]);
    }
    function Delete($id){
        $data = Product::find($id);
        $data->delete();
        return redirect('adminproduct');


    }
    function editkro($id){
        $data=  Product::find($id);
        return view('edit',["collection"=>$data]);


    }

    function addkr(Request $req){
        $data = new Product;
        $data->name=$req->name;
        $data->price=$req->price;
        $data->category=$req->category;
        $data->gallery=$req->gallery;
        $data->description=$req->description;
        $data->save();
        return redirect('adminproduct');


    }




    function updatedkr(Request $req){
        $data =  Product::find($req->id);
        $data->name=$req->name;
        $data->price=$req->price;
        $data->category=$req->category;
        $data->gallery=$req->gallery;
        $data->description=$req->description;
        $data->save();
        
        return redirect('adminproduct');

    }


}
