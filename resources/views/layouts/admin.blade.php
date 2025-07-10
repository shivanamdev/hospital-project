<!DOCTYPE html>

<html lang="en" class="fixed">


  @include('layouts.admin.head')
 

<body>
  <div class="main-wrapper">

     @include('layouts.admin.header')
  
     @include('layouts.admin.sidebar')

    <div class="page-wrapper">

      
      <div class="content">
      
        @yield('content')
      
      </div>
 
         


       @include('layouts.admin.notification')
    </div>
 </div>

 @include('layouts.admin.footer')
</body>


</html>
