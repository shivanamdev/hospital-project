<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
          
            <ul>
                <li class="menu-title">Main</li>
                <li class="{{ 'dashboard' == request()->path() ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                </li>
                <li class="{{ 'admin/gallery' == request()->path() ? 'active' : '' }}">
                    <a href="{{ route('admin.gallery') }}"><i class="fa fa-picture-o"></i> <span>Gallery</span></a>
                </li>
                {{-- <li>
                    <a href="{{ route('admin.Departments') }}"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('admin.doctorslist') }}"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                </li> --}}
                {{-- 
                <li>
                    <a href="patients.html"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                </li>
                <li>
                    <a href="appointments.html"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                </li>
               <i class="fas fa-image"></i>
                --}}
                 <li class="submenu">
                    <a href="#"><i class="fa fa-file-image-o"></i> <span> Banner </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.bannerlist') }}"> List </a></li>
                        <li><a href="{{ route('admin.bnner_addview') }}"> Add </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-calendar"></i> <span> Appointments </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.appointmentslist') }}">List</a></li>
                        {{-- <li><a href="leaves.html">Leaves</a></li>
                        <li><a href="holidays.html">Holidays</a></li>
                        <li><a href="attendance.html">Attendance</a></li> --}}
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-user-md"></i> <span> Doctors </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        
                        <li><a href="{{ route('admin.doctorslist') }}">List</a></li>
                        <li><a href="{{ route('admin.doctorview') }}">Add</a></li>
                        {{-- <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="taxes.html">Taxes</a></li>
                        <li><a href="provident-fund.html">Provident Fund</a></li> --}}
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-hospital-o"></i> <span> Departments </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        
                        <li><a href="{{ route('admin.Departments') }}">List</a></li>
                        <li><a href="{{ route('admin.departmentview') }}">Add</a></li>
                        {{-- <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="taxes.html">Taxes</a></li>
                        <li><a href="provident-fund.html">Provident Fund</a></li> --}}
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-comment-o"></i> <span> Testimonials </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.testimonialslist') }}">List</a></li>
                        <li><a href="{{ route('admin.testimonials-addview') }}">Add</a></li>
                        {{-- <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="taxes.html">Taxes</a></li>
                        <li><a href="provident-fund.html">Provident Fund</a></li> --}}
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-hospital-o"></i> <span> Product </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        
                        <li><a href="{{ route('admin.productlist') }}">Product List</a></li>
                        <li><a href="{{ route('admin.productaddview') }}">Product Add</a></li>
                        <li><a href="{{ route('admin.productqueries') }}">Queries</a></li>
                        <li><a href="{{ route('admin.categorylist') }}">Category List</a></li>
                        <li><a href="{{ route('admin.subcategorylist') }}">Sub-Category List</a></li>

                        {{-- <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="taxes.html">Taxes</a></li>
                        <li><a href="provident-fund.html">Provident Fund</a></li> --}}
                    </ul>
                </li>

                {{-- <li class="submenu">
                    <a href="#"><i class="fa fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="salary.html"> Employee Salary </a></li>
                        <li><a href="salary-view.html"> Payslip </a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a href="chat.html"><i class="fa fa-comments"></i> <span>Chat</span> <span class="badge badge-pill bg-primary float-right">5</span></a>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="#"><i class="fa fa-video-camera camera"></i> <span> Calls</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="voice-call.html">Voice Call</a></li>
                        <li><a href="video-call.html">Video Call</a></li>
                        <li><a href="incoming-call.html">Incoming Call</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="#"><i class="fa fa-envelope"></i> <span> Email</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="compose.html">Compose Mail</a></li>
                        <li><a href="inbox.html">Inbox</a></li>
                        <li><a href="mail-view.html">Mail View</a></li>
                    </ul>
                </li> --}}
                <li class="submenu">
                    <a href="#"><i class="fa fa-columns"></i><span>Pages</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('admin.pageslist')}}">Pages List</a></li>
                        {{-- <li><a href="{{route('admin.about')}}">About</a></li>
                        <li><a href="{{route('admin.privacypolicy')}}">Privacy Policy</a></li> --}}
                        <li><a href="{{route('admin.contact')}}">Contact Us</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="assets.html"><i class="fa fa-cube"></i> <span>Assets</span></a>
                </li> --}}
                {{-- <li>
                    <a href="activities.html"><i class="fa fa-bell-o"></i> <span>Activities</span></a>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="expense-reports.html"> Expense Report </a></li>
                        <li><a href="invoice-reports.html"> Invoice Report </a></li>
                    </ul>
                </li> --}}
                <li class="{{ 'admin/settings' == request()->path() ? 'active' : '' }}">
                    <a href="{{ route('admin.settings') }}"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>
                {{-- <li class="menu-title">UI Elements</li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-laptop"></i> <span> Components</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="uikit.html">UI Kit</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="tabs.html">Tabs</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="#"><i class="fa fa-edit"></i> <span> Forms</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                        <li><a href="form-input-groups.html">Input Groups</a></li>
                        <li><a href="form-horizontal.html">Horizontal Form</a></li>
                        <li><a href="form-vertical.html">Vertical Form</a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="#"><i class="fa fa-table"></i> <span> Tables</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatables.html">Data Table</a></li>
                    </ul>
                </li>
                <li>
                    <a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                </li>
                <li class="menu-title">Extras</li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="login.html"> Login </a></li>
                        <li><a href="register.html"> Register </a></li>
                        <li><a href="forgot-password.html"> Forgot Password </a></li>
                        <li><a href="change-password2.html"> Change Password </a></li>
                        <li><a href="lock-screen.html"> Lock Screen </a></li>
                        <li><a href="profile.html"> Profile </a></li>
                        <li><a href="gallery.html"> Gallery </a></li>
                        <li><a href="error-404.html">404 Error </a></li>
                        <li><a href="error-500.html">500 Error </a></li>
                        <li><a href="blank-page.html"> Blank Page </a></li>
                    </ul>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="javascript:void(0);"><i class="fa fa-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                            </ul>
                        </li> --}}
                        {{-- <li>
                            <a href="javascript:void(0);"><span>Level 1</span></a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    {{-- <script type="text/javascript">
        $(".li").hover(function () {
           
            $(this).toggleClass("active");
        });
    </script> --}}
</div>