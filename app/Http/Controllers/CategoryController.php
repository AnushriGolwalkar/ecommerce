<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function dashboard()
    {
        return view('Admin.dashboard');
    }
    public function addcategory()
    {
        return view('Admin.Category.addcategory');
    }
    public function save(Request $a)
    {
        $data =new Category;
        $data->name=$a->name;
        $data->description=$a->description;
        $file=$a->file('image');
        $filename ='image'.time().'.'.$a->image->extension();
        $file->move("upload/",$filename);
        $data->image=$filename;
        $data->save();
        if ($data){
            return redirect('/Category/addcategory')->with('message','Details filled successfully!');
    }

   
}
public function display()
{
    $data = Category::all();
return view('Admin.Category.display',compact('data'));

}
public function view($id)
    {
        $data = Category::find($id);
        return view('Admin.Category.view',compact('data'));
    }
    public function edit($id)
    {
         $data = Category::find($id);
         return view('Admin.Category.edit',compact('data'));
    }
    public function update(Request $a)
    {
        //print_r($a->all());
        $data=Category::find($a->id);
        $data->name=$a->name;
        $data->description=$a->description;
        $file=$a->file('image');
        $filename ='image'.time().'.'.$a->image->extension();
        $file->move("upload/",$filename);
        $data->image=$filename;
        $data->save();
        if ($data){
            return redirect('/Category/display')->with('message','Details updated successfully!');
        }


    }
    public function delete($id)
    {
        $data = Category::find($id);
        $delete = $data->delete();
        if($delete){
            return redirect('/Category/display')->with('message','Details deleted successfully!');
        }
    
    }
}
