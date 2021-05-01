<?php

namespace App\Http\Controllers;
use App\Banner;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function addbanner()
    {
        return view('Admin.Banner.addbanner');
    }
    public function save(Request $a)
    {
        $data =new Banner;
        $data->title=$a->title;
        $data->url=$a->url;
        $file=$a->file('image');
        $filename ='image'.time().'.'.$a->image->extension();
        $file->move("upload/",$filename);
        $data->image=$filename;

        $data->save();
        if ($data){
            return redirect('/Banner/addbanner')->with('message','Details filled successfully!');
    }

   
}
public function display()
{
    $data = Banner::all();
return view('Admin.Banner.display',compact('data'));

}
public function view($id)
    {
        $data = Banner::find($id);
        return view('Admin.Banner.view',compact('data'));
    }
    public function edit($id)
    {
         $data = Banner::find($id);
         return view('Admin.Banner.edit',compact('data'));
    }
    public function update(Request $a)
    {
        //print_r($a->all());
        $data=Banner::find($a->id);
        $data->title=$a->title;
        $data->url=$a->url;
        $file=$a->file('image');
        $filename ='image'.time().'.'.$a->image->extension();
        $file->move("upload/",$filename);
        $data->image=$filename;
        $data->save();
        if ($data){
            return redirect('/Banner/display')->with('message','Details updated successfully!');
        }


    }
    public function delete($id)
    {
        $data = Banner::find($id);
        $delete = $data->delete();
        if($delete){
            return redirect('/Banner/display')->with('message','Details deleted successfully!');
        }
    
    }

}
