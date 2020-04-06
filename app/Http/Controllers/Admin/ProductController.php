<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\user;
use DB;
class ProductController extends Controller
{
    //
    public function getProduct(){
      $alert = DB::table('detail_bill_detail')->where('status', '1')->count();
         $product= Product::paginate(4);
      return \view('backend.product',\compact('product','alert'));
    }
    public function getAddproduct(){
      $alert = DB::table('detail_bill_detail')->where('status', '1')->count();
      $cate = Category::all();
      return \view('backend.addproduct',\compact('cate','alert'));
    }
    public function postAddproduct( AddProductRequest $request){
      $product = new Product;
      $product->product_name = $request->name;
      $product->product_slug = str_slug($request->name);
      $product->product_price = $request->price;
      $product->product_baohanh = $request->warranty;
      $product->product_phukien = $request->accessories;
      $product->product_tinhtrang = $request->condition;
      $product->product_khuyenmai = $request->promotion;
      $product->product_trangthai = $request->status;
      $product->product_mieuta = $request->description;
      $product->product_spdb = $request->featured;
      $product->product_cate = $request->cate;
      $allowed = array('image/jpg','image/png','image/jpeg');
      if($request->hasFile('img')){
          $file      = $request->file('img');
          $file_name=$file->getClientOriginalName();
          $file_ext = $file->getClientOriginalExtension();
          $file_path=$file->getRealPath();
          $file_size=$file->getSize();
          $file_type=$file->getMimeType();
          $file->move('img', $file->getClientOriginalName());
      }
   $product->product_image=$file->getClientOriginalName();
   $product->save();
   return \redirect()->intended('admin/product')->with("error","Thêm thành công");
    }
    public function getEditproduct($id){
      $alert = DB::table('detail_bill_detail')->where('status', '1')->count();
      $cate = Category::all();
      $product = Product ::find($id);
       return \view('backend.editproduct', \compact('product','cate','alert'));
    }
    public function postEditproduct(Request $request, $id){
      $product = Product ::find($id);
      $product->product_name = $request->name;
      $product->product_slug = str_slug($request->name);
      $product->product_price = $request->price;
      $product->product_baohanh = $request->warranty;
      $product->product_phukien = $request->accessories;
      $product->product_tinhtrang = $request->condition;
      $product->product_khuyenmai = $request->promotion;
      $product->product_trangthai = $request->status;
      $product->product_mieuta = $request->description;
      $product->product_spdb = $request->featured;
      $product->product_cate = $request->cate;
      $allowed = array('image/jpg','image/png','image/jpeg');
      if($request->hasFile('img')){
          $file      = $request->file('img');
          $file_name=$file->getClientOriginalName();
          $file_ext = $file->getClientOriginalExtension();
          $file_path=$file->getRealPath();
          $file_size=$file->getSize();
          $file_type=$file->getMimeType();
          $file->move('img', $file->getClientOriginalName());
      }
   $product->product_image=$file->getClientOriginalName();
   $product->save();
   return \redirect()->intended('admin/product')->with("error","Sửa thành công");

    }
    public function getDeleteproduct($id){
      $product = Product::where('product_id',$id);
      $product->delete();
      return \redirect()->intended('admin/product')->with("error","Xóa thành công");

    }
}
