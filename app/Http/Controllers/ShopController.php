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

        if(request()->categorie){
          $products = Products::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->categorie);
            })->paginate(2);
        }else{
            $products = Products::with('categories')->paginate(6);
        }


        return view('pages.shop')->with('products', $products);
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
