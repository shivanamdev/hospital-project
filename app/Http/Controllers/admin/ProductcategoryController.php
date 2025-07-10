<?php

namespace App\Http\Controllers\admin;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductcategoryController extends Controller
{
    //
    public function show()
    {
        $data=category::get()->all();

// $subdata=subcategory::with('category')->get();

        return view('admin.productCategory.categorylist',compact('data'));
    }


    public function view()
    { 
        $data=category::get()->all();
       
       return view('admin.productCategory.addcategory',compact('data'));
    }


//add  


public function Add(Request $req)
{ 
    $validator = Validator::make($req->all(), [
    'category' => 'required',
    ]);
if ($validator->fails())
{
//
   return back()->withErrors($validator)->withInput();
}

        $cate= new category();
        $cate->category= $req->category;
        $cate->save();

        return back()->with('status1', 'Category Has been successfully Added ');


}


public function SubAdd(Request $req)
{ 
     $validator = Validator::make($req->all(), [
    
    'subcategory' => 'required',
   ]);
if ($validator->fails())
{
//
   return back()->withErrors($validator)->withInput();
}
        $sub= new subcategory();
        $sub->subcategory= $req->subcategory;
        $sub->children_id=$req->category;
        $sub->save();

    return back()->with('status8', 'Sub Category Has been successfully Added ');

}


public function update_category(Request $req)
{
    $validator = Validator::make($req->all(), [
        'name' => 'required',
      ]);
    if ($validator->fails())
    {
    //
       return back()->withErrors($validator)->withinput();
    }
        $category = category::find($req->id);
      
        $category->category=$req->name;
        $category->save();
        return back()->with('status', 'Category Has been Edit successfully ');
}


//delete_category
public function delete_category(Request $req)
    {
        $id = $req->id;
        $delete = category::find($id);
        $delete->delete();
        return back()->with('status', 'Category Has Been Deleted Successfully ');
    }



//sub
public function subshow()
{  $data=category::get()->all();
    // $subdata=subcategory::get()->all();
   
$subdata=subcategory::With('cate')->get();

    return view('admin.productCategory.subcategorylist',compact('data','subdata'));
}


public function update_subcategory(Request $req)
{
   
    $validator = Validator::make($req->all(), [
        'title' => 'required',
        'subname' => 'required',
      ]);
    if ($validator->fails())
    {
    //
       return back()->withErrors($validator)->withinput();
    }
        $category = subcategory::find($req->id);
        $category->children_id=$req->title;
        $category->subcategory=$req->subname;
        $category->save();
        return back()->with('status', 'Sub Category Has been Updated successfully ');
}


//delete_subcategory
public function delete_subcategory(Request $req)
    {
        $id = $req->id;
        $delete = subcategory::find($id);
        $delete->delete();
        return back()->with('status', 'Sub Category Has Been Deleted Successfully ');
    }





}
