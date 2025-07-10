<?php

namespace App\Http\Controllers\user;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\setting;
use App\Models\banner;
use App\Models\page;
use App\Models\testimonial;
use App\Models\gallery;
use App\Models\galleryimage;
use App\Models\contact;
use App\Models\doctor;
use App\Models\department;
use App\Models\Product;
use App\Models\category;
use App\Models\productquery;
use App\Models\appointment;

class FrontendController extends Controller
{


    //index
    public function indexpage()
    {
      //testimonial
      $testimonial= testimonial::get();
      //banner
      $banner= banner::get()->all();
      //department
      $department= department::get()->all();
      //about
      $about= page::where('page_name','About')->first();
      //doctors
      $doctor = DB::table('doctors')
      ->join('departments as departments', 'departments.id', '=', 'doctors.department_id')
      ->select('doctors.id','doctors.name', 'doctors.education','doctors.experience','doctors.image','doctors.appointment_charge','departments.title')
      ->get();
     //gallery
      $gallery= gallery::get();

        return view('frontend.index',compact('department','about','doctor','gallery','banner','testimonial'));
    }








 // product_queryadd
 
   public function product_query(Request $request)
   {   
     
      $validator = Validator::make($request->all(), [
           'name' => 'required',
           'email' => 'required',
           'number' => 'required',
           'qty' => 'required',
          
           ]);
   
       if ($validator->fails())
       {
       //
          return back()->withErrors($validator)->withInput();
       }
   
      $data = new productquery;
       
      $data->user_name=$request->name;
       $data->email=$request->email;
       $data->number=$request->number;
       $data->product_id= $request->id;
       $data->qty=$request->qty;
       $data->msg=$request->msg;
       $data->save();
   
   
       return back()->with('status', 'Your Query Has been sent successfully');
   }       
   


   //appointmentview
   public function appointmentview()
   {
    $department=department::get()->all();
 
       return view('frontend.appointment',compact('department'));
   }
 
   public function getdoctor(Request $request)
   {
      $departmentid=$request->post('departmentid');
      $doctors =DB::table('doctors')->where('department_id',$departmentid)
     ->orderBy('name','asc')->get()->all();
    $html='<option value=""> Select Doctor </option>';
    foreach ($doctors as $item){
       $html.='<option value="'.$item->id.'">'.$item->name.'</option>';
    };
    echo $html;     
   }   

 //Endappointmentview

//appointmentAdd
public function appointment_add(Request $request)
{   
  
   $validator = Validator::make($request->all(), [
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required',
        'number' => 'required',
        'department' => 'required',
        'doctor' => 'required',
        'datetime' => 'required',
        'visit' => 'required',
        
       
        ]);

    if ($validator->fails())
    {
    //
       return back()->withErrors($validator)->withInput();
    }

   $data = new appointment;
    
    $data->firstname=$request->fname;
    $data->lastname=$request->lname;
    $data->email=$request->email;
    $data->number=$request->number;
    $data->department_id= $request->department;
    $data->doctor_id= $request->doctor;
    $data->datetime=$request->datetime;
    $data->visit=$request->visit;
    $data->msg=$request->message;
    $data->save();


    return back()->with('status', 'Your appointment request has been sent successfully. Thank you!');
}       

//appointmentAdd


 // frontend galleryview
    
 public function galleryview()
 {
    //galleryimage
    $galleryimage= galleryimage::get();
   //gallery
   $gallery= gallery::get();

     return view('frontend.gallery',compact('galleryimage','gallery'));
 }


  // frontend testimonialview
    
  public function testimonialview()
  {
   

      return view('frontend.testimonial');
  }


    // frontend about
    
    public function aboutview()
    {
      $page= page::where('page_name','About')->first();

        return view('frontend.about',compact('page'));
    }

   

    // frontend privacypolicyview
    
    public function  privacypolicyview()
    {
      $page= page::where('page_name','Privacy Policy')->first();
        return view('frontend.privacypolicy',compact('page'));
    }
    //contact 
    public function contactview()
    {   
        $setting= setting::first();

        return view('frontend.contact', compact('setting'));
    }
   //contact Add
public function contactadd(Request $request)
{   
  
   $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'message'=>'required',
        ]);

    if ($validator->fails())
    {
    //
       return back()->withErrors($validator);
    }

   $data = new contact;
    
   $data->name=$request->name;
    $data->email=$request->email;
    $data->msg=$request->message;
    $data->save();


    return back()->with('status', 'Your Msg  Has been sent successfully');
}       





  // frontend doctor
    
  public function doctorview()
  {

    $data = DB::table('doctors')
    ->join('departments as departments', 'departments.id', '=', 'doctors.department_id')
    ->select('doctors.id','doctors.name', 'doctors.education','doctors.experience','doctors.image','doctors.appointment_charge','departments.title')
    ->paginate(2);

    return view('frontend.doctor', compact('data'));
  }

  function doctorfetch(Request $request)
  {     
  if($request->ajax())
  {
    $data = DB::table('doctors')
    ->join('departments as departments', 'departments.id', '=', 'doctors.department_id')
    ->select('doctors.id','doctors.name', 'doctors.education','doctors.experience','doctors.image','doctors.appointment_charge','departments.title')
    ->paginate(2);
      return view('frontend.doctordata', compact('data'))->render();
  }
  }



   // frontend productdetail
  public function productshow($url)
  { 
    $Details = Product::Join('categories as categories', 'categories.id', '=', 'products.category_id')
    ->select('products.id','products.name', 'products.net_quantity','products.shortdescription','products.image','products.sellingprice','products.description','products.mrp','categories.category')
    ->where('url',$url)->first();

    return view('frontend.product_detail', compact('Details'));
  }
  // frontend product
    
  public function productview()
  {   
    $productcategory=category::get()->all();

    $data = DB::table('products')
    ->paginate(2);
    

    return view('frontend.product', compact('data','productcategory'));
  
  }

  function productfetch(Request $request)
    {     
    if($request->ajax())
    {
        $data = DB::table('products')
        ->paginate(2);
        return view('frontend.productdata', compact('data'))->render();
    }
    }



  // frontend department
    
  public function departmentview()
  { 
    //  $department= department::get()->all();
    $department= department::get()->all();
      return view('frontend.department', compact('department'));
  }









//product category
 // frontend product
    
 public function productcategory($category)
 {   
   $productcategory=category::where('category',$category)->first();
     $id= $productcategory->id ?? 'id is not found';

   $data = DB::table('products')->where('category_id', $id)
   ->paginate(2);
   

   return view('frontend.productcategory', compact('data','productcategory'));
 
 }

 function productcategoryfetch(Request $request ,$category)
   {     
   if($request->ajax($category))
   {        $productcategory=category::where('category',$category)->first();
            $id= $productcategory->id ?? 'id is not found';

       $data = DB::table('products')->where('category_id', $id)
       ->paginate(2);
       return view('frontend.productcategorydata', compact('data'))->render();
   }
   }




}
