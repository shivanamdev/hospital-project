<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\FrontendController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\form\FormController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\settings\SettingController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\admin\DoctorController;
use App\Http\Controllers\admin\DepartmentsController;
use App\Http\Controllers\admin\NotificationController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductcategoryController;
use App\Http\Controllers\admin\AppointmentController;
use App\Http\Controllers\admin\BannerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//frontend
Route::get('/',[FrontendController::class,'indexpage'])->name('frontend.indexpage');

// about
Route::get('/about', [FrontendController::class,'aboutview'])->name('frontend.about');

// privacypolicy
Route::get('/privacypolicy', [FrontendController::class,'privacypolicyview'])->name('frontend.privacypolicy');

// testimonial
Route::get('/testimonial', [FrontendController::class,'testimonialview'])->name('frontend.testimonial');

// contact
Route::get('/contact', [FrontendController::class,'contactview'])->name('frontend.contact');
Route::post('/contactadd', [FrontendController::class,'contactadd'])->name('frontend.contactadd');


// gallery
Route::get('/gallery', [FrontendController::class,'galleryview'])->name('frontend.gallery');


// doctor
Route::get('/doctor', [FrontendController::class,'doctorview'])->name('frontend.doctor');
Route::get('/doctorfetch',[FrontendController::class, 'doctorfetch']);

// product
Route::get('/product', [FrontendController::class,'productview'])->name('frontend.product');
Route::get('/productfetch',[FrontendController::class, 'productfetch']);
Route::get('/productdetail/{url}',[FrontendController::class, 'productshow'])->name('productdetail');
Route::post('/product_query',[FrontendController::class,'product_query'])->name('product_query');
// product Categories
Route::get('/productcategory/{category}',[FrontendController::class, 'productcategory'])->name('productcategory');
Route::get('/productcategoryfetch/{category}',[FrontendController::class, 'productcategoryfetch']);



// department
Route::get('/department', [FrontendController::class,'departmentview'])->name('frontend.department');

// appointment
Route::get('/appointment', [FrontendController::class,'appointmentview'])->name('frontend.appointment');
Route::post('/getdoctor',[FrontendController::class,'getdoctor'])->name('frontend.getdoctor');
Route::post('/appointmentadd',[FrontendController::class,'appointment_add'])->name('frontend.appointmentadd');

//End frontend





// Form Page
Route::get('/registertionform',[FormController::class,'view'])->name('form.registertion');
Route::post('/registertion',[FormController::class,'create'])->name('form.register');


//admin Login
Route::get('/admin/login',[AdminController::class,'view'])->name('admin.login');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('admin.dashboard');

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

//Admin profile
Route::get('admin/myprofile',[AdminController::class,'profileview'])->name('admin.profile');
Route::get('admin/editprofile',[AdminController::class,'editprofile'])->name('admin.editprofile');
Route::post('admin/profile/update',[AdminController::class,'updateprofile'])->name('admin.profileupdate');
Route::post('admin/password/update',[AdminController::class,'changepassword'])->name('admin.changepassword');

//Admin Banner
Route::get('admin/banner/list',[BannerController::class,'list'])->name('admin.bannerlist');
Route::get('admin/banner',[BannerController::class,'view'])->name('admin.bnner_addview');
Route::post('admin/banner/add',[BannerController::class,'add'])->name('admin.banner_add');
Route::post('admin/banner/delete',[BannerController::class,'delete'])->name('admin.banner_delete');
Route::get('admin/banner/edit/{id}',[BannerController::class,'edit'])->name('admin.banner_edit');;
Route::post('admin/banner/update',[BannerController::class,'update'])->name('admin.banner_update');
Route::get('admin/banner/status/{id}/{status}', [BannerController::class,'status']);





//Admin Gallery
Route::get('admin/gallery',[GalleryController::class,'galleryview'])->name('admin.gallery');
Route::post('admin/addphoto',[GalleryController::class,'Addphoto'])->name('admin.Addphoto');
Route::post('admin/photodelete',[GalleryController::class,'photodelete'])->name('admin.photodelete');
Route::post('admin/photoupdate',[GalleryController::class,'photoupdate'])->name('admin.photoupdate');
Route::get('admin/gallery/photos/{id}',[GalleryController::class,'galleryphotosview'])->name('admin.gallery.edit');
Route::post('admin/titledelete',[GalleryController::class,'phototitledelete'])->name('admin.titledelete');
Route::post('admin/titleupdate',[GalleryController::class,'titleupdate'])->name('admin.titleupdate');
Route::post('admin/addphotos',[GalleryController::class,'addphotos'])->name('admin.addphotos');

//Admin Testimonials
Route::get('admin/List',[TestimonialController::class,'Listview'])->name('admin.testimonialslist');
Route::get('admin/addview',[TestimonialController::class,'Addview'])->name('admin.testimonials-addview');
Route::post('admin/add',[TestimonialController::class,'Add'])->name('admin.testimonials_add');
Route::post('admin/delete',[TestimonialController::class,'delete'])->name('admin.testimonials_delete');

Route::get('admin/testimonial/edit/{id}',[TestimonialController::class,'testimonials_editview']);

Route::post('admin/testimonial/update',[TestimonialController::class,'update'])->name('admin.testimonials_update');


//Website Settings
Route::get('admin/settings',[SettingController::class,'view'])->name('admin.settings');
Route::post('admin/setting/update',[SettingController::class,'update'])->name('admin.setting_update');



 //Admin contact
 Route::get('admin/pages/contact',[PagesController::class,'contactshow'])->name('admin.contact');
 Route::post('admin/contact/delete',[PagesController::class,'contactdelete'])->name('admin.contactdelete');
 Route::get('admin/contact/edit/{id}',[PagesController::class,'contactedit'])->name('admin.contactedit');
 Route::post('admin/contact/update',[PagesController::class,'updatecontact'])->name('admin.updatecontact');

 // Admin pages
 Route::get('admin/pages/list',[PagesController::class,'pageslistshow'])->name('admin.pageslist');

 Route::get('admin/pages/addpages',[PagesController::class,'Addpageview'])->name('admin.AddPage');

 Route::post('admin/addPage',[PagesController::class,'AddPage'])->name('admin.addPages');

 Route::get('admin/page/edit/{id}',[PagesController::class,'pageedit'])->name('admin.editpage');
 Route::post('admin/page/update',[PagesController::class,'updatepage'])->name('admin.updatepage');
 Route::post('admin/page/delete',[PagesController::class,'pagedelete'])->name('admin.pagedelete');

 

 //Departments
 Route::get('admin/departments/list',[DepartmentsController::class,'show'])->name('admin.Departments');
 Route::get('admin/departments/add',[DepartmentsController::class,'view'])->name('admin.departmentview');
 Route::post('admin/departments/adddepartment',[DepartmentsController::class,'Add'])->name('admin.departmentadd');
 Route::post('admin/department/delete',[DepartmentsController::class,'delete'])->name('admin.departmentdelete');
 Route::get('admin/department/edit/{id}',[DepartmentsController::class,'edit'])->name('admin.edit');
 Route::post('admin/department/update',[DepartmentsController::class,'update'])->name('admin.departmentupdate');

//Doctors

Route::get('admin/doctors/list',[DoctorController::class,'show'])->name('admin.doctorslist');
Route::get('admin/doctor/add',[DoctorController::class,'view'])->name('admin.doctorview');
Route::post('admin/doctor/adddoctor',[DoctorController::class,'Add'])->name('admin.doctoradd');
Route::get('admin/doctor/edit/{id}',[DoctorController::class,'edit'])->name('admin.doctoredit');
Route::post('admin/doctor/update',[DoctorController::class,'update'])->name('admin.doctorupdate');
Route::post('admin/doctor/delete',[DoctorController::class,'delete'])->name('admin.doctordelete');

//Notification
Route::get('admin/notificationfetch',[NotificationController::class,'show'])->name('admin.notifications');


//productcategory
Route::get('admin/categorylist',[ProductcategoryController::class,'show'])->name('admin.categorylist');
Route::get('admin/category/add',[ProductcategoryController::class,'view'])->name('admin.categoryaddview');
Route::post('admin/category/addcategory',[ProductcategoryController::class,'Add'])->name('admin.addcategory');
Route::post('admin/subcategory/addsubcategory',[ProductcategoryController::class,'SubAdd'])->name('admin.addsubcategory');
Route::post('admin/category/delete',[ProductcategoryController::class,'delete_category'])->name('admin.categorydelete');
Route::post('admin/category/update',[ProductcategoryController::class,'update_category'])->name('admin.categoryupdate');
Route::get('admin/subcategorylist',[ProductcategoryController::class,'subshow'])->name('admin.subcategorylist');
Route::post('admin/subcategory/delete',[ProductcategoryController::class,'delete_subcategory'])->name('admin.subcategorydelete');
Route::post('admin/subcategory/update',[ProductcategoryController::class,'update_subcategory'])->name('admin.subcategoryupdate');

//product
Route::get('admin/productlist',[ProductController::class,'show'])->name('admin.productlist');
Route::get('admin/product/add',[ProductController::class,'view'])->name('admin.productaddview');
Route::post('admin/product/addproduct',[ProductController::class,'Add'])->name('admin.addproduct');
Route::post('/getsubcategory',[ProductController::class,'getsubcategory'])->name('admin.getsubcategory');
Route::post('admin/product/delete',[ProductController::class,'delete'])->name('admin.productdelete');
Route::get('admin/product/edit/{id}',[ProductController::class,'edit'])->name('admin.productedit');
Route::post('admin/product/update',[ProductController::class,'update'])->name('admin.productupdate');
Route::post('/fetchsubcategory',[ProductController::class,'fetchsubcategory'])->name('admin.fetchsubcategory');
Route::get('admin/productqueries',[ProductController::class,'queries_show'])->name('admin.productqueries');
Route::get('admin/productquery/edit/{id}',[ProductController::class,'queries_edit'])->name('admin.productqueryedit');
Route::post('admin/product/queryupdate',[ProductController::class,'queries_update'])->name('admin.productquery_update');
Route::post('admin/productquery/delete',[ProductController::class,'queries_delete'])->name('admin.productquerydelete');

//Appointments
Route::get('admin/appointments',[AppointmentController::class,'view'])->name('admin.appointmentslist');
Route::post('admin/appointment/delete',[AppointmentController::class,'delete'])->name('admin.appointmentdelete');
Route::get('admin/appointment/edit/{id}',[AppointmentController::class,'edit'])->name('admin.appointmentedit');
Route::post('/admin/getdoctors',[AppointmentController::class,'getdoctor'])->name('admin.getdoctor');
Route::post('admin/appointment/update',[AppointmentController::class,'update'])->name('admin.appointmentupdate');

 
});
