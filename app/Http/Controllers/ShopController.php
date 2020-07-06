<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ShopController extends Controller
{
    public function home()
    {
        return view('pages.shop')->with('products', $products = Products::all());
    }

    /**
     * @param Products $product
     * @return Application|Factory|View
     */
    public function showProductSingle(Products $product)
    {
        //$product = Products::where('slug', $slug)->first();
        return view('pages.product_single', ['product' => $product]);
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function wishlist()
    {
        return view('pages.wishlist');
    }


}
