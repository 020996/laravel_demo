<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\user;
use DB;
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
    public function getDangky(){
        return \view('backend.adduser');
    }
    public function postDangky(Request $request){
       $user = new user;
       $user->name = $request->name;
       $user->password =bcrypt($request->pass);
       $user->email = $request->email;
       $user->level = $request->level;
       $user->save();
       return redirect()->intended('login')->with('error','Tài khoản của bạn đã đăng ký thành công');

    }
    public function getLogout(){
        Auth::logout();
        return \redirect()->intended('login');
    }
    public function getlistuser(){
        $alert = DB::table('detail_bill_detail')->where('status', '1')->count();
        $user = user::all();
        return \view('backend.admin',compact('user','alert'));
    }
    public function getdeleteuser($id){
        $user = user::find($id);
        $user->delete();
        return back()->with('error','Tài khoản đã xóa thành công');;

    }
}
