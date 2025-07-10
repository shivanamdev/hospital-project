<?php

namespace App\Http\Controllers\admin;
use App\Models\doctor;
use App\Models\Product;
use App\Models\department;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        $doctors=doctor::all()->count();
        $departments=department::all()->count();
        $Products=Product::all()->count();
         return view('admin.dashboard',compact('doctors','departments','Products'));
    }

}
