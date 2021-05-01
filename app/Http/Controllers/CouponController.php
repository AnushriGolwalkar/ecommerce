<?php

namespace App\Http\Controllers;
use App\Coupon;

use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function addcoupon()
    {
        return view('Admin.Coupon.addcoupon');
    }
    public function save(Request $a)
    {
        $data =new Coupon;
        $data->coupon_code=$a->coupon_code;
        $data->amount=$a->amount;
        $data->amount_type=$a->amount_type;
        $data->expiry_date=$a->expiry_date;
        $data->status=$a->status;


        $data->save();
        if ($data){
            return redirect('/Coupon/addcoupon')->with('message','Details filled successfully!');
    }

   
}
public function display()
{
    $data = Coupon::all();
return view('Admin.Coupon.display',compact('data'));

}
public function view($id)
    {
        $data = Coupon::find($id);
        return view('Admin.Coupon.view',compact('data'));
    }
    public function edit($id)
    {
         $data = Coupon::find($id);
         return view('Admin.Coupon.edit',compact('data'));
    }
    public function update(Request $a)
    {
        //print_r($a->all());
        $data=Coupon::find($a->id);
        $data->coupon_code=$a->coupon_code;
        $data->amount=$a->amount;
        $data->amount_type=$a->amount_type;
        $data->expiry_date=$a->expiry_date;
        $data->status=$a->status;
        $data->save();
        if ($data){
            return redirect('/Coupon/display')->with('message','Details updated successfully!');
        }


    }
    public function delete($id)
    {
        $data = Coupon::find($id);
        $delete = $data->delete();
        if($delete){
            return redirect('/Coupon/display')->with('message','Details deleted successfully!');
        }
    
    }
}
