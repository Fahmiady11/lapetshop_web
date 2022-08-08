<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table='carts';

    protected $primaryKey='IdPurchase';
    
    public $timestamps = false;

    public $guarded = [];

    public function cartitems()
    {
        return $this->hasMany(CartItems::class);
    }
    
    public function buyers()
    {
        return $this->belongsTo(Buyers::class, 'Buyer');
    }
}
