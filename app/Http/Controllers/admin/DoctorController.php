<?php

namespace App\Http\Controllers\admin;
use App\Models\doctor;
use App\Models\department;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //doctorslistshow

    public function show()
    { 
        $data =doctor::join('departments as departments', 'departments.id', '=', 'doctors.department_id')
        ->select('departments.title','doctors.id','doctors.created_at','doctors.image','doctors.education','doctors.name','doctors.appointment_charge','doctors.experience')
        ->get()->all();

        return view('admin.Doctor.doctorslist',compact('data'));
    }

    public function view()
    {
        $data=department::get()->all();
         return view('admin.Doctor.add',compact('data'));
    }

//add


public function Add(Request $req)
{ 
    
     $validator = Validator::make($req->all(), [
    'image' => 'required',
    'name' => 'required',
    'education' => 'required',
    'appointment_charge' => 'required',
    'department' => 'required',
    'experience' => 'required',

    ]);
if ($validator->fails())
{
//
   return back()->withErrors($validator)->withInput();
}

if($req->image!='')
{
   $image= "assets/img/doctor/".time().'_'.$req->file('image')->getClientOriginalName();
   $req->file('image')->move(\public_path("/assets/img/doctor"),$image);
}



        $data= new doctor();
       
        $data->name= $req->name;
        $data->education= $req->education;
        $data->appointment_charge= $req->appointment_charge;
        $data->department_id=$req->department;
        $data->experience=$req->experience;

        $data->image=$image;
       
        $data->save();
        return back()->with('status', 'Doctor Has been successfully Added ');


}


//edit
public function edit($id)
{   
    $data =doctor::get()->where('id',$id)->first();
    $depart=department::get()->all();
    return view('admin.Doctor.edit',compact('data','depart'));
}




//update
public function update(Request $req)
{  
    $validator = Validator::make($req->all(), [
        'image' => 'required',
        'name' => 'required',
        'education' => 'required',
        'appointment_charge' => 'required',
        'department' => 'required',
        'experience' => 'required',
   ]);
if ($validator->fails())
{
//
  return back()->withErrors($validator);
}
if($req->file('image')!='')
{  $data1 = doctor::get()->where('id',$req->id)->first();
   if($data1->image!="")
   {
      $image = $data1->image;

      $imagepathimage =(\public_path($image));
      File::delete($imagepathimage);
      File::delete($image);
   }
   $image= "assets/img/doctor/".time().'_'.$req->file('image')->getClientOriginalName();
   $req->file('image')->move(\public_path("/assets/img/doctor"),$image);
}

 $data = doctor::find($req->id);
 $data->name= $req->name;
 $data->education= $req->education;
 $data->appointment_charge= $req->appointment_charge;
 $data->department_id=$req->department;
 $data->experience=$req->experience;

 if($req->image!='')
 {
   $data->image=$image;
 }

 $data->save();
 return back()->with('status','Doctor Has Been updated Successfully ');
}


//de
public function delete(Request $req)
{
     $id = $req->id;
     $delete = doctor::find($id);
     if($delete->image!='')
     {
         $image = $delete->image;
         $imagepathimage =(\public_path($image));
         unlink($imagepathimage);
         File::delete($image);
     }
     
     $delete->delete();
     return back()->with('status', 'Doctor Details Has been deleted successfully ');

}













}
