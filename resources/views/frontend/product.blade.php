@extends('layouts.frontend')

@section('content')


<main id="main">
    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services mt-5">
      <div class="container">

        <div class="section-title">
          <h2 class="mt-5">Products</h2>


          <div class="d-flex scroll">
            @foreach($productcategory as $category) 
           
            <button class="btn btn-outline-light product-scroll mt-3" type="submit"><a href="{{ route('productcategory',$category->category)}}">
              {{ $category->category }}
            </a></button>

           

            @endforeach  
            {{-- <button class="btn btn-outline-light product-scroll mt-3" type="submit">Healthcare Devices</button>

            <button class="btn btn-outline-light product-scroll mt-3" type="submit">Homeopathy Products</button>

            <button class="btn btn-outline-light product-scroll mt-3" type="submit">Ayurveda Products</button> --}}

            
          </div>

          @if (session('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
           @endif
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

       <div id="product">
      
           @include('frontend/productdata')
      
       </div>
       


      </div>
    </section><!-- End Services Section -->

    
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
		url:"/productfetch/"+"?page="+page,
		data:{},
	
		success:function(data){

		jQuery('#product').html(data)

		}

		});

 }
	});
</script>






@endsection