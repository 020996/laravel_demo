<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart;
use App\Models\detail_bill;
use App\Models\detail;
use App\Models\Product;
use App\Models\detail_bill_detail;
use App\Models\Category;
use Mail;

class CartController extends Controller
{
    //
    public function getAddcart($id)
    {
        $product = Product::find($id);
        $array = array(
            'id' => $id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' => 1,
            'attributes' => array(
                'image' => $product->product_image,
            )
        );
        Cart::add($array);
        return \redirect('cart/showcart');
    }
    public function getshowcart()
    {
        $cate = Category::all();
        $items = Cart::getContent();
        // echo'<pre>';
        // print_r($items[16]['quantity']*$items[16]['price']);
        // echo'<pre>';
        // die;
        return \view('fontend.cart', compact('cate', 'items'));
    }
    public function getdeletecart($id)
    {
        if ($id == 'all') {
            Cart::clear();
        } else {
            Cart::remove($id);
        }
        return \back()->with('error', 'xóa thành công');
    }
    public function postUpdatecart(Request $request)
    {
        $quantity = $request->quantity;
        $id = $request->id;
        Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $quantity,
            ),
        ));
        $items = Cart::getContent();
        $price = $items[$id]['quantity'] * $items[$id]['price'];
        $sobital = Cart::getSubTotal();
        $data = array(
            'price' => $price,
            'id' => $id,
            'sobital' => $sobital,
        );
        echo json_encode($data);
    }
    public function postCom(Request $request)
    {
        $data['info'] = $request->all();
        $email = $request->email;
        $data['cart'] = Cart::getContent();

        $detail = new detail;
        $detail->name = $data['info']['name'];
        $detail->email = $data['info']['email'];
        $detail->phone = $data['info']['phone'];
        $detail->dress = $data['info']['add'];
        $detail->save();

        $detail_bill = new detail_bill;
        $detail_bill->detail_id = $detail->id;
        $detail_bill->tongtien = Cart::getSubTotal();
        $detail_bill->save();
        // mua nhiều sản phẩm nên foreach  

        foreach (Cart::getContent() as $key) {
            $detail_bill_detail = new detail_bill_detail;
            $detail_bill_detail->product_id = $key->id;
            $detail_bill_detail->detail_bill_id = $detail_bill->id;
            $detail_bill_detail->qty = $key->quantity;
            $detail_bill_detail->unit_price = $key->price;
            $detail_bill_detail->tong = $key->quantity * $key->price;
            $detail_bill_detail->status = 1;
            $detail_bill_detail->save();
        }
        Cart::clear();
        return redirect('compele');
    }
    public function getCompele()
    {
        $cate = Category::all();
        return \view('fontend.complete', compact('cate'));
    }
}
