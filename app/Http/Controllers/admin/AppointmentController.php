<?php

namespace App\Http\Controllers\admin;
use App\Models\appointment;
use App\Models\department;
use App\Models\doctor;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
//appointment list

public function view()
{
  $data=appointment::Join('doctors as doctors', 'doctors.id', '=', 'appointments.doctor_id')
  ->Join('departments as departments', 'departments.id', '=', 'appointments.department_id')
  ->select('appointments.id','appointments.department_id','appointments.created_at','appointments.firstname', 'appointments.lastname','appointments.email','appointments.number','appointments.datetime','appointments.visit','appointments.msg','departments.title','doctors.name')

  ->get()->all();

    return view('admin.Appointments.list',compact('data'));
}



//appointment delete
    public function delete(Request $req)
    {
        $id = $req->id;
        $delete = appointment::find($id);
        $delete->delete();
        return back()->with('status', 'Appointment Has Been Deleted Successfully ');
    }


//productqueries list

public function edit($id)
{  
    $departments=department::get()->all();

  $data=appointment::Join('doctors as doctors', 'doctors.id', '=', 'appointments.doctor_id')
  ->Join('departments as departments', 'departments.id', '=', 'appointments.department_id')
  ->select('appointments.id','appointments.department_id','appointments.doctor_id','appointments.created_at','appointments.firstname', 'appointments.lastname','appointments.email','appointments.number','appointments.datetime','appointments.visit','appointments.msg','departments.title','doctors.name')
  ->where('appointments.id',$id)->first();

    return view('admin.Appointments.edit',compact('data','departments'));
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

//update
//appointment
public function update(Request $request)
{   
  
//    $validator = Validator::make($request->all(), [
//         'fname' => 'required',
//         'lname' => 'required',
//         'email' => 'required',
//         'number' => 'required',
//         'department' => 'required',
//         'doctor' => 'required',
//         'datetime' => 'required',
//         'visit' => 'required',
        
       
//         ]);

//     if ($validator->fails())
//     {
//     //
//        return back()->withErrors($validator)->withInput();
//     }

   $data =  appointment::find($request->id);
    
    $data->firstname=$request->fname;
    $data->lastname=$request->lname;
    $data->email=$request->email;
    $data->number=$request->number;
    $data->department_id= $request->department;
    $data->doctor_id= $request->doctor;
    $data->datetime=$request->datetime;
    $data->visit=$request->visit;
    $data->msg=$request->msg;
    $data->save();


    return back()->with('status', 'Your appointment has been Updated successfully. ');
}       


}
