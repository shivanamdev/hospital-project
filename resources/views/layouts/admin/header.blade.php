<div class="header">
    <div class="header-left">
        @php
        $setting = App\Models\setting::first();
      @endphp
        <a href="index-2.html" class="logo">
            <img src="{{asset ($setting->web_favicon) }}" onerror="this.src={{ asset('assets/img/favicon.png') }}" width="35" height="35"  style="background: white" alt=""> <span></span>
        </a>
    </div>
    <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
    <ul class="nav user-menu float-right">
        <li class="nav-item dropdown d-none d-sm-block">
            <a href="#" id="notifi" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span>Notifications</span>
                </div>
          
                <div class="drop-scroll" id='li'>
                    @include('layouts/admin/notifi')  
                </div>
               
                <div class="topnav-dropdown-footer">
                    <a href="activities.html">View all Notifications</a>
                </div>
            </div>
        </li>
        {{-- <li class="nav-item dropdown d-none d-sm-block">
            <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
        </li> --}}
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" src="{{ asset('assets/img/user.jpg')}}" width="24" alt="Admin">
                    <span class="status online"></span>
                </span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('admin.profile') }}">My Profile</a>
                {{-- <a class="dropdown-item" href="edit-profile.html">Edit Profile</a> --}}
                {{-- <a class="dropdown-item" href="{{ route('admin.settings') }}">Settings</a> --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                    this.closest('form').submit();">{{ __('Log Out') }}</a>
                </form>
            </div>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="login.html">Logout</a>
        </div>
    </div>
</div>



<script type="text/javascript">

    $(document).ready(function() {
       
       $("#notifi").click(function() {                
       
         $.ajax({    //create an ajax request to display.php
           type: "GET",
           url: "admin/notificationfetch",             
           data:{},   //expect html to be returned                
           success: function(data){                    
               $("#li").html(data); 
            consolelog(data);
           }
   
       });
   });
   });
   
   </script>




{{-- 
<script type="text/javascript">
	jQuery(document).ready(function()
	{
		jQuery(document).on('click', '.a', function(event){
  event.preventDefault(); 
  var page = $(this).attr('href');
  fetch_exclusivedata(page);
 });

 function fetch_exclusivedata(page)
 {   
		$.ajax({
         type:"GET",
		url:"/exclusivefetch/"+"?page="+page,
		data:{},
	
		success:function(data){

		jQuery('#exclusivelist').html(data)

		}

		});

 }
	});
</script> --}}
