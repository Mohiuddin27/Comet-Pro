<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    public function ShowLoginPage(){
        return view('admin.pages.login');
    }

    public function login(Request $request){
        $this->validate($request,[
           'auth'=>'required',
           'password'=>'required',
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->auth, 'password' => $request->password]) || 
          Auth::guard('admin')->attempt(['cell' => $request->auth, 'password' => $request->password])||
          Auth::guard('admin')->attempt(['username' => $request->auth, 'password' => $request->password])
        ){
            return redirect()->route('admin.dashboard.page');
        }
        else{
            return redirect()->route('admin.login.page')->with('warning','Email or Password Wrong');
        }
    }
}
