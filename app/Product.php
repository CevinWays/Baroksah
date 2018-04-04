<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
        return 'Rp'.number_format($this->price / 100, 2);
    }
    public function scopeAndaMungkin($query)
    {
        return $query->inRandomOrder()->take(6);
    }
}
