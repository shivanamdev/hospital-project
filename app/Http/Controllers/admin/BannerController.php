<?php

namespace App\Http\Controllers\admin;
use App\Models\banner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
   
//Admin banner list
 public function list()
 {  
   $data = banner::get()->all();

    return view('admin.Banner.list',['data'=>$data]);

 }
//Addview  banner
public function view()
{  
  
return view('admin.Banner.add');

}




//Admin banner Add

 public function Add(Request $req)
 {       $url = str_replace(' ','+', $req->banner_name);
    $req['url'] = strtolower($url);
          
        $validator = Validator::make($req->all(), [
            'banner_name' => 'required',
           
            'image'=>'required',
            'banner_description'=>'required',
           
            ]);
        if ($validator->fails())
        {
        //
           return back()->withErrors($validator)->withInput();
        }
         if($req->image!='')
         {
            $image= "assets/img/banner/".time().'_'.$req->file('image')->getClientOriginalName();
            $req->file('image')->move(\public_path("/assets/img/banner"),$image);
         }
         
          $data = new banner();
          $data->banner_name = $req->banner_name;
          $data->banner_image=$image;
          $data->banner_description=$req->banner_description;
          $data->banner_url= $req['url'];
          $data->save();
          return back()->with('status','Banner Has Been Added Successfully ');
     }


   //delete
   public function delete(Request $req)
   {
       $delete = banner::find($req->id);
      if($delete->image!='')
      {
          $image = $delete->image;
          $imagepathimage =(\public_path($image));
          unlink($imagepathimage);
          File::delete($image);
      }
      
       $delete->delete();
       return back()->with('status','Banner Has Been Deleted Successfully ');
   }


   //edit
   public function edit($id)
     {   
         $data =banner::get()->where('id',$id)->first();

         return view('admin.Banner.edit',['data'=>$data]);
     }
  
   //update
     public function update(Request $req)
     {   
        
        
        $url = str_replace(' ','+', $req->name);
        $req['url'] = strtolower($url);

         $validator = Validator::make($req->all(), [
       
        'banner_description'=>'required',
        ]);
    if ($validator->fails())
    {
    //
       return back()->withErrors($validator);
    }
     if($req->file('image')!='')
     {  $data1 = banner::get()->where('id',$req->id)->first();
        if($data1->image!="")
        {
           $image = $data1->image;

           $imagepathimage =(\public_path($image));
           File::delete($imagepathimage);
           File::delete($image);
        }
        $image= "assets/img/banner/".time().'_'.$req->file('image')->getClientOriginalName();
        $req->file('image')->move(\public_path("/assets/img/banner"),$image);
     }
    
      $data = banner::find($req->id);
    
      $data->banner_name = $req->name;
      
      $data->banner_description=$req->banner_description;
      $data->banner_url= $req['url'];
      if($req->image!='')
      {
        $data->banner_image=$image;
      }
    
      $data->save();
      return back()->with('status','Banner Has Been updated Successfully ');
 }

//status
 public function status($id,$status)
 {   
        $banner = banner::find($id);
        $banner->status = $status;
        $banner->save();

    }


}
