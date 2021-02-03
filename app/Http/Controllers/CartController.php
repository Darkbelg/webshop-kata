<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class CartController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $product = Product::find(request('productId'));

        session()->increment('cart.' . $product->id);

        return redirect(route('cart.show'))->with('status', 'Product added to cart.');
    }

    public function show()
    {
        $cart = session('cart');
        $products = [];
        foreach ($cart as $productId => $quantity) {
            $products[] = ['product' => Product::find($productId), 'quantity' => $quantity];
        };
        
        return view('cart.show', ['products' => $products]);
    }
}
