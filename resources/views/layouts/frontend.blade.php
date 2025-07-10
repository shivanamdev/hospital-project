<!DOCTYPE html>
<html lang="en">


  @include('layouts.frontend.head')
 

<body>
 
  <!-- ======= Top Bar ======= -->
     @include('layouts.frontend.topbar')
  <!-- ======= Top Bar ======= -->
<!-- ======= Header ======= -->
     @include('layouts.frontend.header')
<!-- ======= Header ======= -->
   

      <!-- ======= content ======= -->
      
        @yield('content')
      
     <!-- ======= content ======= -->
 
     
 <!-- ======= Footer ======= -->   
       @include('layouts.frontend.footer')
 <!-- ======= Footer ======= -->
      
  <!-- ======= script ======= --> 
 @include('layouts.frontend.script')
 <!-- ======= script======= -->
</body>


</html>
