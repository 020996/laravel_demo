<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;
use App\Models\user;
use DB;
use App\Models\detail_bill_detail;



class HomeController extends Controller
{
    //
    public function getHome(){
        $alert = DB::table('detail_bill_detail')->where('status', '1')->count();
        $products = Product::all()->count();
        $cate = Category::all()->count();
        $comment = Comment::all()->count();
        $user = user::all()->count();
       return view('backend.index',compact('products','cate','comment','user','alert'));
    }
}
