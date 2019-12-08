<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart;
use App\Models\Product;
use App\Models\Category;
use Mail;
class CartController extends Controller
{
    //
    public function getAddcart($id){
        $product = Product::find($id);
        $array = array(
            'id' => $id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' => 1,
            'attributes' => array(
              'image'=>$product->product_image,
            )
        );
        Cart::add($array);
        return \redirect('cart/showcart');
    }
    public function getshowcart(){
        $cate = Category::all();
        $items = Cart::getContent();
        return \view('fontend.cart',compact('cate','items'));
    }
    public function getdeletecart($id){
        if($id=='all'){
             Cart::clear();
        }else{
            Cart::remove($id);
        }
        return \back()->with('error','xóa thành công');
    }
    public function postUpdatecart(Request $request){
       $quantity = $request->quantity;
       $id = $request->id;
       Cart::update($id, array(
        'quantity' => array(
            'relative' => false,
            'value' => $quantity,
        ),
    ));
    return \redirect('cart/showcart');
    }
    public function postCom(Request $request){
        $data['info'] = $request->all();
        $email = $request->email;
        $data['cart'] = Cart::getContent();
        Mail::send('fontend.email', $data, function ($message) use($email) {
            $message->from('lecongkhanh020996@gmail.com', 'Khanh');

            $message->to($email, $email);

            $message->cc('diepmac020996@gmail.com', 'Diep Mac');

            $message->subject('Xác Nhận hóa đơn mua Hàng của Diệp Mặc Shop');
        });
        Cart::clear();
        return redirect('compele');
    }
    public function getCompele(){
        $cate = Category::all();
        return \view('fontend.complete',compact('cate'));

    }
}
