<?php

namespace App\Http\Controllers\admin;
use App\Models\department;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //Departmentsshow

    public function show()
    { 
        $data=department::get()->all();
        return view('admin.Department.departments',compact('data'));
    }


    public function view()
    {
         return view('admin.Department.add');
    }









    public function Add(Request $req)
    { 

         $validator = Validator::make($req->all(), [
        'image' => 'required',
        'title' => 'required',
        'des' => 'required',
        'short_des' => 'required',
        
        ]);
    if ($validator->fails())
    {
    //
       return back()->withErrors($validator)->withInput();
    }

    if($req->image!='')
    {
       $image= "assets/img/department/".time().'_'.$req->file('image')->getClientOriginalName();
       $req->file('image')->move(\public_path("/assets/img/department"),$image);
    }


    
            $data= new department();
           
            $data->title= $req->title;
            $data->description=$req->des;
            $data->image=$image;
            $data->short_des= $req->short_des;
            $data->save();
            return back()->with('status', 'Department Has been successfully Added ');


   }

//de
   public function delete(Request $req)
   {
        $id = $req->id;
        $delete = department::find($id);
        if($delete->image!='')
        {
            $image = $delete->image;
            $imagepathimage =(\public_path($image));
            unlink($imagepathimage);
            File::delete($image);
        }
        
        $delete->delete();
        return back()->with('status', 'Contact Details Has been deleted successfully ');
   
   }


   public function edit($id)
   {   
       $data =department::get()->where('id',$id)->first();

       return view('admin.Department.edit',['data'=>$data]);
   }




//up
public function update(Request $req)
{  
    $validator = Validator::make($req->all(), [
       
        'title' => 'required',
        'des' => 'required',
        'short_des' => 'required',
   ]);
if ($validator->fails())
{
//
  return back()->withErrors($validator);
}
if($req->file('image')!='')
{  $data1 = department::get()->where('id',$req->id)->first();
   if($data1->image!="")
   {
      $image = $data1->image;

      $imagepathimage =(\public_path($image));
      File::delete($imagepathimage);
      File::delete($image);
   }
   $image= "assets/img/department/".time().'_'.$req->file('image')->getClientOriginalName();
   $req->file('image')->move(\public_path("/assets/img/department"),$image);
}

 $data = department::find($req->id);
 $data->title= $req->title;
 $data->description=$req->des;
 
 $data->short_des= $req->short_des;
 if($req->image!='')
 {
   $data->image=$image;
 }

 $data->save();
 return back()->with('status','Department Has Been updated Successfully ');
}


}
