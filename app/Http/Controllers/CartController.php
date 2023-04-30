<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Inventory;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request,$id){
// dd($request->all());
 $product = Product::find($id);
 //dd($product);
\Cart::session(auth()->id())->add(array(
    'id' => uniqid($product->id),
    'name' => $product->product_name,
    'image' => $product->product_image,
    'price' => $product->product_price,
    'quantity' => $request->quantity,
    'attributes' => array(),
    'associatedModel' => $product
));

return redirect(url('user/cartview'));

    }


    public function cartview(){
       $cartitems = \Cart::session(auth()->id())->getContent();
        return view('userside.user_pages.cart',compact('cartitems'));
    }

    public function destroy($id){
        \Cart::session(auth()->id())->remove($id);
        return back();
     }
}
