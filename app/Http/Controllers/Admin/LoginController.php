<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function getlogin(){
        return view('backend.login');
    }
    public function postLogin(Request $request){
        if($request->remember = 'Remember Me'){
            $remember = true;
        }else{
            $remember=false;
        }
       if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember)){
         return \redirect()->intended('admin/home');
       }else{
          return \back()->with('error','Tài khoản hoặc mật khẩu của bạn nhập chưa đúng');
       }
    }
    public function getLogout(){
        Auth::logout();
        return \redirect()->intended('login');
    }
}
