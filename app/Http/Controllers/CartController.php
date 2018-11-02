<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Stripe\Stripe;
use Stripe\Charge;
use Mail;

class CartController extends Controller
{
    public function __construct()
  { $this->middleware('auth'); }

  public function add(Request $request, Product $product)
  {
    $cart = Cart::add([
      'id' => $product->id,
      'name' => $product->name,
      'qty' => $request->qty,
      'price' => $product->price
    ])->associate(Product::class);  // Associate cart item with model
    return redirect()->route('cart.show')
                     ->with(['success'=>'Item added to cart.']);
  }

  public function show()
  { return view('carts.cart'); }

  public function remove_item($rowId)
  {
    Cart::remove($rowId);
    return redirect()->back()
                     ->with(['success'=>'Product removed from cart.']);
  }

  public function minusOne($rowId)
  {
    $qty = Cart::get($rowId)->qty;
    if($qty > 1) {
      Cart::update($rowId, $qty - 1);
    }
    return redirect()->back();
  }

  public function plusOne($rowId)
  {
    Cart::update($rowId, Cart::get($rowId)->qty + 1);
    return redirect()->back();
  }

  public function checkout()
  {
    if(Cart::content()->count() == 0) {
      return redirect()->back()
                       ->with(['warning'=>'Your cart is empty!']);
    } else {
      return view('carts.checkout');
    }

  
 function tax($rowId)
  {
    Cart::tax($rowId);
    return redirect()->back();
                     
  } 

    function emptyCart()
    {
        Cart::destroy();
        return redirect('cart')->withSuccessMessage('Your cart has been cleared!');
    }


  
}
}