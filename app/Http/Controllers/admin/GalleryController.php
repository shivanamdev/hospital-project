<?php

namespace App\Http\Controllers\admin;
use App\Models\gallery;
use App\Models\galleryimage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
   

    public function galleryphotosview($id)
 {    
    $title = gallery::where('id',$id)->first();
    $data = DB::table('galleryimages')
    ->join('galleries as galleries', 'galleryimages.title_id', '=', 'galleries.id')
    ->select('galleryimages.images','galleryimages.id')
    ->where('galleryimages.title_id',$id)
    ->get()->all();
    return view('admin.Gallery.photos',compact('data','title'));

 }


 //Admin Gallery
 public function galleryview()
 {  
    $data = gallery::get()->all();
    return view('admin.Gallery.gallery',['data'=>$data]);

 }

//Admin Add photo
 public function Addphoto(Request $request)
 {
   
   
     $validator = Validator::make($request->all(), [
         'title' => 'required',
         'image' => 'required',
         ]);

     if ($validator->fails())
     {
     //
        return back()->withErrors($validator)->withInput();
     }

     if($request->image!='')
     {
        $image= "assets/img/gallery/".time().'_'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(\public_path("/assets/img/gallery"),$image);
     }

   

     $gallery = new gallery();
     $gallery->title = $request->title;
     $gallery->gicon = $image;
     $gallery->save();
    
     
  


     return back()->with('status', 'Gallery Photo Has been Added Successfully');
 }



//Admin add  photos perticular title
public function addphotos(Request $request)
{
  
   
    $validator = Validator::make($request->all(), [
      
        'files' => 'required',
        ]);

    if ($validator->fails())
    {
    //
       return back()->withErrors($validator)->withInput();
    }

 
    if ($request->hasfile('files')) {
       $images = $request->file('files');

    foreach($images as $image){
     
      
       $imageName=$image->getClientoriginalName();
         
       $image->move(\public_path("/assets/img/gallery"),$imageName);

       $data = new galleryimage();
       $data->title_id =$request->id;
       $data->images="assets/img/gallery/".$imageName;
       $data->save();

    }
   }


    return back()->with('status5', 'Photo Has been Added Successfully');
}









//Admin Delete photo
public function photodelete(Request $request)
{ 
    $delete = galleryimage::find($request->id);
    if($delete->images!='')
    { 
        $image = $delete->images;
      
        $imagepathimage =(\public_path($image));
       
        File::delete($imagepathimage);
        File::delete($image);
    }
    $delete->delete();
    return back()->with('status3', 'Photo Has been deleted Successfully');
}

public function phototitledelete(Request $request)
{
   $delete = gallery::find($request->id);
    $delete->delete();
    return back()->with('status4', 'Photo Has been deleted Successfully');
}


public function titleupdate(Request $req)
{
   if($req->file('image')!='')
{  $data1 = gallery::get()->where('id',$req->id)->first();
   if($data1->gicon!="")
   {
      $image = $data1->gicon;

      $imagepathimage =(\public_path($image));
      File::delete($imagepathimage);
      File::delete($image);
   }

   $image= "assets/img/gallery/".time().'_'.$req->file('image')->getClientOriginalName();
   $req->file('image')->move(\public_path("/assets/img/gallery"),$image);


}
   


   $data = gallery::find($req->id);
   $data->title=$req->title;
   $data->gicon=$image;
   $data->save();
   return back()->with('status2','Title Has Been Updated Successfully ');
}

//photoupdate
public function photoupdate(Request $req)
{  
    $validator = Validator::make($req->all(), [
 
   'image'=>'required',
   ]);
if ($validator->fails())
{
//
  return back()->withErrors($validator);
}
if($req->file('image')!='')
{  $data1 = galleryimage::get()->where('id',$req->id)->first();
   if($data1->images!="")
   {
      $image = $data1->images;

      $imagepathimage =(\public_path($image));
      File::delete($imagepathimage);
      File::delete($image);
   }

   $image= $req->file('image')->getClientOriginalName();
   $req->file('image')->move(\public_path('assets/img/gallery'),$image);
}

 $data = galleryimage::find($req->id);
 
 if($req->image!='')
 {
   $data->images="assets/img/gallery/".$image;
 }
 $data->save();
 return back()->with('status3','Photo Has Been Updated Successfully ');
}




}
