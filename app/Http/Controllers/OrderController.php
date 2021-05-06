<?php

namespace App\Http\Controllers;
use App\order;
use App\orderproduct;
use DB;

use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function  display()
    {
        $data=DB::table('orders')->join('orderproducts','orders.id','orderproducts.order_id')->get();
        return view('Admin.Order.display',compact('data'));
    }
}
