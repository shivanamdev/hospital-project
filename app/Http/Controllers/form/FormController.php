<?php

namespace App\Http\Controllers\form;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
   /**
     * create a new user.
     *
     * @param  Request  $request
     * @return Response
     */
   
    //registertion form
    public function view()
    {
        return view('form.registertion');
    }



    public function create(Request $request)
    {
      
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
             'password'=>'required|string|confirmed',
            ]);
                        
            if ($validator->fails()) {
                return redirect('/registertionform')
                            ->withErrors($validator)
                            ->withInput();
            }

        $data = new User;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->save();

        return redirect('login')->with('status', 'Account Has Been created successfully Please Login');

    } 

}
