<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function home()
    {
      /* $products = DB::table('products')
            ->get(); */
        /* $products_shop = view('pages.index')
            ->with('products', $products);

        return view('layouts.app')->with('pages.index', $products_shop);*/

        return view('pages.shop')->with('products', $products = Products::all());
    }

    public function productSingle()
    {
        return view('pages.product_single');
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
