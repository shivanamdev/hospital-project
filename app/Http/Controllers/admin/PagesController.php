<?php

namespace App\Http\Controllers\admin;
use App\Models\page;
use App\Models\contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PagesController extends Controller
{







    public function Addpageview()
    {
         return view('admin.pages.addpage');
    }
    
    public function AddPage(Request $req)
    { 

         $validator = Validator::make($req->all(), [
        'page_name' => 'required',
       
        'des' => 'required',
        'mtitle' => 'required',
        'metades' => 'required',
        'metakey' => 'required',
        ]);
    if ($validator->fails())
    {
    //
       return back()->withErrors($validator)->withInput();
    }
    
            $data= new page();
            $data->page_name = $req->page_name;
           
            $data->description=$req->des;
            $data->meta_title= $req->mtitle;
            $data->meta_description= $req->metades;
            $data->meta_keywords= $req->metakey;
            $data->save();
            return back()->with('status', 'Pages  Has been successfully Added ');


   }



   //update
     
   public function updatepage(Request $req)
   { 

        $validator = Validator::make($req->all(), [
       'page_name' => 'required',
       'des' => 'required',
       'mtitle' => 'required',
       'metades' => 'required',
       'metakey' => 'required',
       ]);
   if ($validator->fails())
   {
   //
      return back()->withErrors($validator);
   }
   
           $data=page::find($req->id);
           $data->page_name = $req->page_name;
           $data->description=$req->des;
           $data->meta_title= $req->mtitle;
           $data->meta_description= $req->metades;
           $data->meta_keywords= $req->metakey;
           $data->save();
           return back()->with('status', 'Pages  Has been successfully Updated ');


  }


   public function pageslistshow()
   {

        $data=page::get()->all();
        return view('admin.pages.pageslist',compact('data'));
   }
   public function pageedit($id)
   {

        $pagedata=page::where('id',$id)->first();
        return view('admin.pages.pageedit',compact('pagedata'));
   }

   public function pagedelete(Request $req)
   {
        $id = $req->id;
        $delete = page::find($id);
        $delete->delete();
        return back()->with('status', 'Contact Details Has been deleted successfully ');
   
   }
   
   


//contact
public function contactshow()
{

     $data=Contact::get()->all();
     return view('admin.pages.contactus',compact('data'));
}


public function contactdelete(Request $req)
{
     $id = $req->id;
     $delete = Contact::find($id);
     $delete->delete();
     return back()->with('status', 'Contact Details Has been deleted successfully ');

}

public function contactedit($id)
{

     $data=Contact::where('id',$id)->first();
     return view('admin.pages.contactedit',compact('data'));
}


 //update
     
 public function updatecontact(Request $req)
 { 

      $validator = Validator::make($req->all(), [
     'name' => 'required',
     'email' => 'required',
     'msg' => 'required',
     
     ]);
 if ($validator->fails())
 {
 //
    return back()->withErrors($validator);
 }
 
         $data=Contact::find($req->id);
         $data->name = $req->name;
         $data->email= $req->email;
         $data->msg=$req->msg;
        
         $data->save();
         return back()->with('status', 'Contact  Has been successfully Updated ');


}




}
