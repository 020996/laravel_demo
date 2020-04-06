<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use CKSource\CKFinder\Backend\Backend;
use App\Models\user;
use DB;
class CommentController extends Controller
{
    //
    public function getlistcomment(){
      $alert = DB::table('detail_bill_detail')->where('status', '1')->count();
      $comment = Comment::all();
      $product = Product::all();
      return \view('Backend.comment',compact('comment','product','alert'));
    }
    public function getdeleteComment($id){
        $comment = Comment::where('id',$id);
        $comment->delete();
        return \back();
    }
}
