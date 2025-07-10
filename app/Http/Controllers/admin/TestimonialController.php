<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class TestimonialController extends Controller
{

//Admin Testimonials list
 public function Listview()
 {  
   $data = testimonial::get()->all();

    return view('admin.testimonials.testimonialslist',['data'=>$data]);

 }
//Addview  Testimonials
public function Addview()
{  
  

   return view('admin.testimonials.add-testimonials');

}




//Admin Testimonials Add

 public function Add(Request $req)
     {
            //  return time();
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'testi'=>'required',
            'image'=>'required',
            
           
            ]);
        if ($validator->fails())
        {
        //
           return back()->withErrors($validator)->withInput();
        }
         if($req->image!='')
         {
            $image= "assets/img/testimonial/image/".time().'_'.$req->file('image')->getClientOriginalName();
            $req->file('image')->move(\public_path("/assets/img/testimonial/image"),$image);
         }
         
          $data = new testimonial();
          $data->name = $req->name;
          $data->testimonials=$req->testi;
          $data->image=$image;
         
          $data->save();
          return back()->with('status','Testimonial Has Been Added Successfully ');
     }



     //delete
     public function delete(Request $req)
     {
         $delete = testimonial::find($req->id);
        if($delete->image!='')
        {
            $image = $delete->image;
            $imagepathimage =(\public_path($image));
            unlink($imagepathimage);
            File::delete($image);
        }
        
         $delete->delete();
         return back()->with('status','Testimonial Has Been Deleted Successfully ');
     }



     public function testimonials_editview($id)
     {   
         $data =testimonial::get()->where('id',$id)->first();

         return view('admin.testimonials.edit_testimonials',['data'=>$data]);
     }

    public function update(Request $req)
     {  
         $validator = Validator::make($req->all(), [
        'name' => 'required',
        'testi'=>'required',
        ]);
    if ($validator->fails())
    {
    //
       return back()->withErrors($validator);
    }
     if($req->file('image')!='')
     {  $data1 = testimonial::get()->where('id',$req->id)->first();
        if($data1->image!="")
        {
           $image = $data1->image;

           $imagepathimage =(\public_path($image));
           File::delete($imagepathimage);
           File::delete($image);
        }
        $image= "assets/img/testimonial/image/".time().'_'.$req->file('image')->getClientOriginalName();
        $req->file('image')->move(\public_path("/assets/img/testimonial/image"),$image);
     }
    
      $data = testimonial::find($req->id);
      $data->name = $req->name;
      $data->testimonials=$req->testi;
      if($req->image!='')
      {
        $data->image=$image;
      }
    
      $data->save();
      return back()->with('status','Testimonial Has Been updated Successfully ');
 }




}
