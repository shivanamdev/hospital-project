<?php

namespace App\Http\Controllers\admin;
use App\Models\notification;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //

    public function show()
    {  if($request->ajax())
        {
            
        $data = notification::Join('users as users', 'users.id', '=', 'notifications.user_id')
        ->select('users.name')
        ->get();
  echo ('123');

die();  return view('layouts.admin.notifi',compact('data'));
    }
}

}
