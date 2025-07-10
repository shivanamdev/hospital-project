<?php

namespace App\Http\Controllers\settings;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\setting;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
      //settings views
    public function view()
    {  
        $data = setting::first();

          return view('admin/settings.settings',['data'=>$data]);
    }


      //settings Update
    public function update(Request $req)
    {  
           
      //     $validator = Validator::make($req->all(), [
      //    'webtitle' => 'required',
      //    'web_logo'=> 'required',
      //    'email'=> 'required',
      //    'number'=> 'required',
      //    'address'=> 'required',
      //    'city'=> 'required',
      //    'state'=> 'required',
      //    'number'=> 'required',
      //    'postal_code'=> 'required',
      //    'meta_title'=> 'required',
      //    'meta_discription'=> 'required',
      //    'meta_keywords'=> 'required',
        

      //  ]);
      //  if ($validator->fails())
      //  { dd('fails');
      //   //
      //   return back()->withErrors($validator);
      // }
      
      if($req->file('web_logo')!='')
     {  $data1 = setting::get()->where('id',$req->id)->first();
        if($data1->web_logo!="")
        {
           $image = $data1->web_logo;

           $imagepathimage =(\public_path($image));
           File::delete($imagepathimage);
           File::delete($image);
        }
        $image= "assets/img/settings/".time().'_'.$req->file('web_logo')->getClientOriginalName();
        $req->file('web_logo')->move(\public_path("/assets/img/settings"),$image);
     }
     
     //favicon
     if($req->file('faviconimage')!='')
     {  $data1 = setting::get()->where('id',$req->id)->first();
        if($data1->web_favicon!="")
        {
           $favi = $data1->web_favicon;

           $imagepathimage =(\public_path($favi));
           File::delete($imagepathimage);
           File::delete($favi);
        }
        $favi= "assets/img/settings/".time().'_'.$req->file('faviconimage')->getClientOriginalName();
        $req->file('faviconimage')->move(\public_path("/assets/img/settings"),$favi);
     }

       $data=setting::find($req->id);
      
       if($req->faviconimage!='')
       {
         $data->web_favicon=$favi;
       }

       if($req->web_logo!='')
       {
         $data->web_logo=$image;
       }
       $data->title = $req->webtitle;
      
       $data->email=$req->email;
       $data->number=$req->number;
       $data->address=$req->address;
       $data->city=$req->city;
       $data->state=$req->state;
       $data->postal_code=$req->postal_code;
       $data->fb_url=$req->fb_url;
       $data->insta_url=$req->insta_url;
       $data->youtube_url=$req->youtube_url;
       $data->twitter_url=$req->twitter_url;
       $data->meta_title=$req->meta_title;
       $data->meta_discription=$req->meta_discription;
       $data->meta_keywords=$req->meta_keywords;

       $data->save();
       return back()->with('status','Settings Has Been updated Successfully ');
     }
 



    
     



}
