@extends('layouts.frontend')

@section('content')



<main id="main">

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg mt-5">
      <div class="container">

        <div class="section-title">
          <h2 class="mt-5">Make an Appointment</h2>
          @if (session('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
           @endif
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>
        <div class="row php-email-form">
        <form action="{{ route('frontend.appointmentadd') }}" method="post" role="form" enctype="multipart/form-data" >
          @csrf
          <div class="row">
            <div class="col-md-6 form-group  mt-3 mt-md-0">
              <input type="text" name="fname" class="form-control" id="name"  value="{{ old('fname') }}" placeholder="Your First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              
              @if($errors->has('fname'))
              <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
              <strong>{{ $errors->first('fname') }}</strong>
              </p>
              @endif
              <div class="validate">
               
              </div>
            </div>

            <div class="col-md-6 form-group  mt-3 mt-md-0">
              <input type="text" name="lname" class="form-control" id="name"   value="{{ old('lname') }}" placeholder="Your Last Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             
              @if($errors->has('lname'))
              <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
              <strong>{{ $errors->first('lname') }}</strong>
              </p>
              @endif
              <div class="validate">
              
              </div>
            </div>
          </div>

            <div class="row">
            <div class="col-md-6 form-group mt-3 ">
              <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"  placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              @if($errors->has('email'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
                </p>
                @endif
              <div class="validate">
               
              </div>
            </div>
            <div class="col-md-6 form-group mt-3 ">
              <input type="number" class="form-control" name="number" id="phone"  value="{{ old('number') }}"  placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
             
              @if($errors->has('number'))
              <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
              <strong>{{ $errors->first('number') }}</strong>
              </p>
              @endif
              <div class="validate">
                
              </div>
            </div>
          </div>
          <div class="row">
           
            <div class="col-md-6 form-group mt-3">
              <select name="department" id="department"  class="form-select" onchange="val()">
                <option value="">Select Department</option>
                @foreach ($department as $item)
                          <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach  
              </select>

              @if($errors->has('department'))
              <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
              <strong>{{ $errors->first('department') }}</strong>
              </p>
              @endif
              <div class="validate">
                
              </div>
            </div>
            <div class="col-md-6 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>

               
              </select>
              @if($errors->has('doctor'))
              <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
              <strong>{{ $errors->first('doctor') }}</strong>
              </p>
              @endif
              <div class="validate">
               
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6 form-group mt-3">
              <input type="datetime-local" name="datetime" value="{{ old('datetime') }}"  class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              @if($errors->has('datetime'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('datetime') }}</strong>
                </p>
                @endif
              <div class="validate">
                
              </div>
            </div>
            <div class="col-md-6 form-group mt-3">

              <select name="visit" id="Visited" class="form-select">
                <option  selected>Have You Visited Us Before </option>
                <option value="New Patient">New Patient</option>
                <option value="Returning Patient">Returning Patient</option>
                <option value="Other">Other</option>
                
              </select>
              @if($errors->has('visit'))
              <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
              <strong>{{ $errors->first('visit') }}</strong>
              </p>
              @endif
              <div class="validate">
                
              </div>
            </div>
          </div>
            <div class="col-md-12">
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
            </div>


         

          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>
        </div>
      </div>
    </section><!-- End Appointment Section -->

    
  </main><!-- End #main -->




<script>
	jQuery(document).ready(function()
	{    
	jQuery('#department').change(function(){

		let departmentid=jQuery(this).val();
		jQuery.ajax({
		url:'/getdoctor',
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