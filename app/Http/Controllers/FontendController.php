<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;


class FontendController extends Controller
{
    //
    public function getHome(){
        $cate = Category::all();
        $product_spdb = Product::where('product_spdb',1)->orderBy('product_id','desc')->take(8)->get();
        $product_new = Product::where('product_spdb',0)->orderBy('product_id','desc')->take(8)->get();
        return \view('fontend.home',compact('product_spdb','product_new','cate'));
    }
    public function getdetail($id){
        $comment = Comment::where('com_product',$id)->get();
        $cate = Category::all();
        $product = Product::find($id);
        return \view('fontend.details',compact('product','cate','comment'));
    }
    public function postdetail(Request $request,$id){
      $comment = new Comment;
      $comment->com_name = $request->name;
      $comment->com_email = $request->email;
      $comment->com_content = $request->content;
      $comment->com_content = $request->content;
      $comment->com_product = $id;
      $comment->save();
      return \back();
    }
    public function getCategory($id){
        $cate = Category::all();
        $cates = Category::find($id);
        $product = Product::where('product_cate',$id)->orderBy('product_id','desc')->paginate(8);
        return \view('fontend.category',compact('cate','product','cates'));
    }
    public function getSeach(Request $request){
        $cate = Category::all();
        $seach =  $request->text;
        $seach = str_replace(' ','%',$seach);
        $products = Product::where('product_name','like','%'.$seach.'%')->paginate(8);
        return \view('fontend.search',compact('cate','products','seach'));
    }
   
}
