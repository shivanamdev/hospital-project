@extends('layouts.frontend')

@section('content')

<main id="main">

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors mt-5">
      <div class="container">

        <div class="section-title">
          <h2 class="mt-5">Doctors</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div id="doctor">
      
          @include('frontend/doctordata')
     
      </div>

      </div>
    </section>
    <!-- End Doctors Section -->
  
  </main><!-- End #main -->




  <script type="text/javascript">
    jQuery(document).ready(function()
    {
      jQuery(document).on('click', '.pagination a', function(event){
    event.preventDefault(); 
    var page = $(this).attr('href').split('page=')[1];
    fetch_exclusivedata(page);
   });
  
   function fetch_exclusivedata(page)
   {   
      $.ajax({
           type:"GET",
      url:"/doctorfetch/"+"?page="+page,
      data:{},
    
      success:function(data){
  
      jQuery('#doctor').html(data)
  
      }
  
      });
  
   }
    });
  </script>




  @endsection