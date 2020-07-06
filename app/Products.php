<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $fillable = ['name', 'price', 'image', 'category_id'];
    /**
     * @var mixed
     */


    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getOldPriceAttribute()
    {
        return $this->price + 20;
    }
}
