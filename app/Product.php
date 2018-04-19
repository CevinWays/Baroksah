<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function presentPrice()
    {
        return 'Rp'.number_format($this->price / 1);
    }
    public function scopeAndaMungkin($query)
    {
        return $query->inRandomOrder()->take(6);
    }
}
