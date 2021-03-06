<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name', 'email', 'phone', 'address'
    ];

    public function orders(){
        return $this->hasMany(Order::class, 'orderid');
    }
}
