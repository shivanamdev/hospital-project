<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;



class AdminController extends Controller
{

   //admin login  view
   public function view()
   {  
    return view('admin.login');
   }


     //Admin Profile
     public function profileview()
     {  
         return view('admin.profile.myprofile');
     }
      //Admin Edit-Profile
      public function editprofile()
      {  
          return view('admin.profile.editprofile');
      }


      public function updateprofile(Request $request)
      {
        

        //  $validator = Validator::make($request->all(), [
        //       'name' => 'required',
        //       'email' => 'required',
        //       'mobile' => 'required',
        //       'address' => 'required',
        //       'profile_photo_path' => 'required',
  
        //       ]);
  
        //   if ($validator->fails())
        //   {
        //   //
        //      return back()->withErrors($validator);
        //   }

          if($request->file('profile_photo_path')!='')
          {  $data1 = User::get()->where('id',$request->id)->first();
             if($data1->profile_photo_path!="")
             {
                $image = $data1->profile_photo_path;
     
                $imagepathimage =(\public_path('assets/img/adminprofile/'.$image));
                File::delete($imagepathimage);
                File::delete($image);
             }
             $image=$request->file('profile_photo_path')->getClientOriginalName();
             $request->file('profile_photo_path')->move(\public_path("/assets/img/adminprofile"),$image);
          }
     
  
          $data = User::find($request->id);
          $data->name =$request->name;
          $data->email =$request->email;
          $data->number =$request->mobile;
          $data->gender =$request->Gendar;
          if($request->profile_photo_path!='')
          {
            $data->profile_photo_path=$image;
          }
  
         $data->save();
  
  
          return back()->with('status', 'Your Profile Has been successfully updated ');
      }
  

      public function changepassword(Request $request)
      {  
        $data = User::find($request->id);
        $data->password = Hash::make($request->password);
        $data->update();
        return back()->with('status', 'Your password Has been successfully updated ');
      }

}
