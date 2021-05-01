<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Category;
use App\Product;
use App\Cart;
use Session;
use DB;
use Auth;
use App\User;
use App\Order;
use App\Orderproduct;

class FrontController extends Controller
{
    public function index()
    {
        $banner=Banner::all();
        $category=Category::all();
        $product=Product::all();
        
        
        return view('Front.index',compact('banner','product','category'));
    }
    public function productdetail($id)
    {
        $session_id=Session::getId();
        $data=Cart::where(['session_id'=>$session_id])->get();
        $product=Product::find($id);

        return view('Front.productdetail',compact('product','data'));
    }
    public function addtocart(Request$a)
    {
       
        //print_r($a->all());
       $session_id=Session::getId();
       $cart=new Cart;
       if(Auth::check())
       {
           $useremail=Auth::user()->email;
           $cart->useremail=$useremail;
       }
       $cart->product_id=$a->id;
       $cart->product_name=$a->product_name;
       $cart->product_price=$a->product_price;
       $cart->product_image=$a->product_image;
       $cart->product_quantity=$a->product_quantity;
       $cart->session_id=$session_id;

       $cart->save();
       if($cart){
       return redirect('cart');

       }
    }
    public function cart()
    
    {


        if(Auth::check()){
            $useremail=Auth::User()->email;
            $data=Cart::where('useremail',$useremail)->get();
            $d=$data;
            return view('Front.cart',compact('data','d'));



        }
        else{
            $session_id=Session::getId();
            $data=Cart::where(['session_id'=> $session_id])->get();
            $d=$data;   
        
         return view('Front.cart',compact('data','d'));

        }
    
    }


    public function delcartitem($id)
    {
        $data=Cart::find($id);
        $data->delete();
        if($data)
        {
            return redirect('cart')->with('message','item deleted from the cart');
        }
    }

    public function updatequantity($id=null,$product_quantity=null){
       // print_r($id);
        DB::table('carts')->where('id',$id)->increment('product_quantity');
        return redirect('cart')->with('message','Product quantity updated');
    }
    public function checkout()
    {
       
       $useremail=Auth::User()->email;
       
       $d=Cart::where(['useremail'=>$useremail])->get(); 
        $data=$d;
        return view('Front.checkout',compact('d','data'));
    }
    public function place_order(Request $a)
    {
       //print_r($a->all());
       $data = new Order;
       $data->useremail=$a->email;
       $data->name=$a->name;
       $data->address=$a->address;
       $data->city=$a->city;
       $data->state=$a->state;
       $data->country=$a->country;
       $data->pincode=$a->pincode;
       $data->phone=$a->phone;
       $data->payment_method=$a->payment_method;
       $data->grand_total=$a->grand_total;

       $data->save();

       $order_id=DB::getPdo()->lastinsertID();
       //print_r($order_id);
       

       $cart_product=DB::table('carts')->where(['useremail'=>$a->email])->get();

       // print_r($cart_product);

        foreach ($cart_product as $c)
        {
            $cart=new orderproduct;

            $cart->useremail=$a->email;
            $cart->order_id=$order_id;
            $cart->product_id=$c->product_id;
            $cart->product_name=$c->product_name;
            $cart->product_price=$c->product_price;
            $cart->product_size=$c->product_size;
            $cart->product_quantity=$c->product_quantity;
            $cart->product_image=$c->product_image;

            $cart->save();

        }
      


       if($cart)
       {
           return redirect('thanks')->with('message','order details has been submitted successfully!');
       }
       else{
           return redirect('thanks')->with('message','Order details has not been submitted! ');
       }
    }

    public function orderconfirm()
    {
        $useremail=Auth::user()->email;

        DB::table('carts')->where('useremail',$useremail)->delete();

        return view('Front.thanks');
    }

    public function myaccount()
    {
        return view ('Front.myaccount');
    }

}
