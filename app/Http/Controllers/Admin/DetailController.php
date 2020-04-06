<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\detail;
use App\Models\detail_bill;
use App\Models\detail_bill_detail;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

use function Psy\debug;

class DetailController extends Controller
{
    public function getlistdetail(){
        $alert = DB::table('detail_bill_detail')->where('status', '1')->count();
        // SELECT * FROM detail_bill_detail 
        // LEFT JOIN product ON product.product_id = detail_bill_detail.product_id
        // LEFT JOIN detail_bill ON detail_bill.id = detail_bill_detail.detail_bill_id
        // LEFT JOIN detail ON detail.id = detail_bill.detail_id
        $detail = DB::table('detail_bill_detail')
        ->leftJoin('product', 'product.product_id', '=', 'detail_bill_detail.product_id')
        ->leftJoin('detail_bill', 'detail_bill.id', '=', 'detail_bill_detail.detail_bill_id')
        ->leftJoin('detail', 'detail.id', '=', 'detail_bill.detail_id')
        ->orderBy('id_id', 'DESC')
        ->get();
        // echo'<pre>';
        // print_r($detail);
        // echo'<pre>';
        // die;
        return \view('Backend.detail',compact('detail','alert'));
    }
    public function getdeleteDetail($id){
        $delete = detail_bill_detail::where('id_id',$id);
        $delete->delete();
        return \back();

    }
    public function updateDetail(){
        $tow = 2;
        $detail = DB::table('detail_bill_detail')->update(['status' => $tow]);
        echo $tow;
    }
}
