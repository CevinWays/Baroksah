<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public function findByCode($code)
    {
        return self::where('code',$code)->first();
    }

    public function discount()
    {
        if ($this->type == 'fixed') {
            return $this->value;
        } elseif ($this->type == 'percent') {
            return round(($this->percent_off / 100) * $total);
        }else{
            return 0;
        }
        
    }
}