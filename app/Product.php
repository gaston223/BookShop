<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable = ['name', 'price', 'image', 'stock'];
    /**
     * @var mixed
     */


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getOldPriceAttribute()
    {
        return $this->price + 20;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public static function checkIfNotAvailable()
    {
        foreach (Cart::content() as $item){
            $product = Product::find($item->model->id);
            if ($product->stock < $item->qty) {
                return true;
            }
        }

        return false;
    }


    public static function updateStock()
    {
        foreach (Cart::content() as $item){
            $product = Product::find($item->model->id);

            $product->update(['stock' => $product->stock - $item->qty]);
        }
    }


}
