
@extends('layouts.admin')

@section('content')


<div class="row">

    <div class="col-lg-8 offset-lg-2 card-header">
        
        <h4 class="page-title pt-3">Edit Appointment </h4>
     
        @if (session('status'))
    <div class="alert alert-success" id="successMessage">
    <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
    </div>
    @endif
    </div>
    
</div>
<div class="row" >
    <div class="col-lg-8 offset-lg-2 py-2 card">
        
        <form action="{{route('admin.appointmentupdate')}}" method="post" enctype="multipart/form-data">
            @csrf

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label>First Name</label>
            <input class="form-control" type="hidden" name="id" value="{{ $data->id }}">
            <input class="form-control" type="text" name="fname" value="{{ $data->firstname }}">
        </div>
    </div>
   
<div class="col-lg-6">
    <div class="form-group">
        <label>Last Name</label>
    
        <input class="form-control" type="text" name="lname" value="{{ $data->lastname }}">
    </div>
</div>

</div>
          

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label>Email</label>
            
            <input class="form-control" type="email" name="email" value="{{ $data->email }}">
        </div>
    </div>
   
<div class="col-lg-6">
    <div class="form-group">
        <label>Phone Number</label>
       
        <input class="form-control" type="number" name="number" value="{{ $data->number }}">
    </div>
</div>

</div>


<div class="row">
    <div class="col-lg-6">
        <label>Department</label>
        <div class="form-group">
            <select  class="select select2-hidden-accessible" name="department" id="department"  class="form-select">
                <option value="">Select Department</option>
                @foreach ($departments as $item)
                          <option value="{{ $item->id }}"  @if($item->id == $data->department_id)
                            selected
                @endif>{{ $item->title }}</option>
                @endforeach  
              </select>
        </div>
    </div>
   
<div class="col-lg-6">
    <label>Doctor</label>
    <div class="form-group">
       <select class="select select2-hidden-accessible" name="doctor" id="doctor">
            <option value="{{ $data->doctor_id }}">{{ $data->name }}</option>

           
          </select>
       
    </div>
</div>

</div>


<div class="row">
    <div class="col-lg-6">
        <label>Date Time</label>
        <div class="form-group">
            <input type="datetime-local" name="datetime" value="{{ $data->datetime }}"  class="form-control" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
 
        </div>
    </div>
   
<div class="col-lg-6">
    <label>Visit</label>
    <div class="form-group">
        
        <select  name="visit" id="Visited" class="select select2-hidden-accessible" >
            <option>Have You Visited Us Before </option>
            <option value="New Patient"   @if ( $data->visit == 'New Patient')
            selected
            @endif>New Patient</option>
            <option value="Returning Patient" @if ($data->visit=="Returning Patient")
            selected
            @endif>Returning Patient</option>
            <option value="Other" @if ($data->visit=="Other")
            selected
            @endif>Other</option>
            
          </select>
       
    </div>
</div>

</div>


                  
            <div class="form-group">
                <label>Message</label>
                <textarea cols="15" rows="3" class="form-control" name="msg" id="msg">{{ $data->msg }}</textarea>
            </div>
          
           
            <div class="m-t-20 text-center">
                <button class="btn btn-primary  btn-block submit-btn" type="submit">Update </button>
            </div>
        </form>
    </div>
</div>




<script>
	jQuery(document).ready(function()
	{    
	jQuery('#department').change(function(){

		let departmentid=jQuery(this).val();
		jQuery.ajax({
		url:'/admin/getdoctors',
		type:'post',
		data:'departmentid='+departmentid+'&_token={{csrf_token()}}',
		success:function(result){

		jQuery('#doctor').html(result)

		}

		});

	});
	});
</script>

@endsection