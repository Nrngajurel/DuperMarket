<?php

namespace App\Http\Controllers;

use App\Components\Shop\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {

    }

    public function store(Request $request)
    {
        $product=  Product::findOrFail($request->id);
        $data= $request->validate([
          'productId'=>'required|exists:products,id',
          'qty'=>'required|integer|between:1,',$product->stock_qty,
          'options'=>'nullable|json',
        ]);
        $cart=Cart::get();
        if($cart->itemExist($data->productId)){
            $cart->update($data);
        }
        Cart::add($data);
        if ($request->ajax()){
            return ['msg'=>'item is added to cart'];
        }
        return back();
    }

    public function update(Request $request)
    {

    }

    public function destroy(Request $request)
    {

    }
}
