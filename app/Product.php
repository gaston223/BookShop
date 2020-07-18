<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable = ['name', 'price', 'image'];
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
}
