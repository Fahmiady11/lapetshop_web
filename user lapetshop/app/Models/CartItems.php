<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;

    protected $table='cart_items';

    protected $primaryKey='cart_IdPurchase';

    public $timestamps = false;

    protected $guarded = [];

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_IdPurchase');
    }
    
    public function products()
    {
        return $this->belongsTo(Products::class, 'IdProduct');
    }
}
