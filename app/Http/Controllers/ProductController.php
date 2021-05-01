<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addproduct()
    {
        return view('Admin.Product.addproduct');
    }
    public function save(Request $a)
    {
        $data =new Product;
        $data->product_name=$a->product_name;
        $data->product_code=$a->product_code;
        $data->product_size=$a->product_size;
        $data->product_description=$a->product_description;
        $file=$a->file('product_image');
        $filename ='img'.time().'.'.$a->product_image->extension();
        $file->move("upload/",$filename);
        $data->product_image=$filename;
        $data->product_price=$a->product_price;
        $data->product_quantity=$a->product_quantity;
        $data->featured_product=$a->featured_product;
        $data->popular_product=$a->popular_product;
        $data->latest_product=$a->latest_product;
        $data->status=$a->status;


        $data->save();
        if ($data){
            return redirect('/Product/addproduct')->with('message','Details filled successfully!');
    }

   
}
public function display()
{
    $data = Product::all();
return view('Admin.Product.display',compact('data'));

}
public function view($id)
    {
        $data = Product::find($id);
        return view('Admin.Product.view',compact('data'));
    }
    public function edit($id)
    {
         $data = Product::find($id);
         return view('Admin.Product.edit',compact('data'));
    }
    public function update(Request $a)
    {
        //print_r($a->all());
        $data=Product::find($a->id);
        $data->product_name=$a->product_name;
        $data->product_code=$a->product_code;
        $data->product_size=$a->product_size;
        $data->product_description=$a->product_description;
        $file=$a->file('product_image');
        $filename ='img'.time().'.'.$a->product_image->extension();
        $file->move("upload/",$filename);
        $data->product_image=$filename;
        $data->product_price=$a->product_price;
        $data->product_quantity=$a->product_quantity;
        $data->featured_product=$a->featured_product;
        $data->popular_product=$a->popular_product;
        $data->latest_product=$a->latest_product;
        $data->status=$a->status;
        $data->save();
        if ($data){
            return redirect('/Product/display')->with('message','Details updated successfully!');
        }


    }
    public function delete($id)
    {
        $data = Product::find($id);
        $delete = $data->delete();
        if($delete){
            return redirect('/Product/display')->with('message','Details deleted successfully!');
        }
    
    }
}
