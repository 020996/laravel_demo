<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\AddcateRequest;
use App\Http\Requests\EditCateRequest;
use App\Models\Product;

class CategoryController extends Controller
{
    public function getCate(){
        $cate = Category::all();
        return \view('backend.category',\compact('cate'));
    }
    public function postCate(AddcateRequest $request){
      $category=new Category;
      $category->cate_name=$request->name;
      $category->cate_slug=str_slug($request->name);
      $category->save();
      return \back()->with("error","Thêm thành công");
    }
    public function getEditCate($id){
        $cate = Category::find($id);
        return \view('backend.editcategory',compact('cate'));
    }
    public function postEditCate(EditCateRequest $request, $id){
           $category=Category::find($id);
           $category->cate_name=$request->name;
           $category->cate_slug=str_slug($request->name);
           $category->save();
           return \redirect()->intended('admin/category')->with("error","Sửa thành công");

    }
    public function getdelete($id){
      $product = Product::all();
      foreach ($product as $item):
          if($item->product_cate==$id){
            return \redirect()->intended('admin/category')->with('error','Không thể xóa chi tiết sản phẩm này');
          }
      endforeach;
      $cate = Category::find($id);
      $cate->delete();
      return \redirect()->intended('admin/category')->with("error","Xóa thành công");
    }
}
