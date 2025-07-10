<ul class="notification-list">
    {{-- @foreach($data as $item)                 --}}
    <li  class="notification-message">

        <a href="activities.html">
            <div class="media">
                <span class="avatar">
                    <img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
                </span>
                <div class="media-body">
                    <p class="noti-details"><span class="noti-title"></span> added new task <span class="noti-title">Patient appointment booking</span></p>
                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                </div>
            </div>
        </a>
       
    </li>
    {{-- @endforeach --}}
</ul>