<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    public function locations()
    {
        return $this->hasMany('\App\Location');
    }
}
