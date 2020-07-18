<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ShopController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function home()
    {
        if(request()->categorie){
          $products = Product::with('categories')->whereHas('categories', function ($query){
                $query->where('slug', request()->categorie);
            })->orderBy('created_at', 'DESC')->paginate(4);
        }else{
            $products = Product::with('categories')->paginate(4);
        }


        return view('pages.shop')->with('products', $products);
    }

    /**
     * @param Product $product
     * @return Application|Factory|View
     */
    public function showProductSingle(Product $product)
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
