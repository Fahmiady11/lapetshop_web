<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table='products';

    protected $primaryKey='IdProduct';

    public $timestamps = false;

    protected $guarded = [];

    public function baskets()
    {
        return $this->hasMany(Baskets::class);
    }
    
    public function cartitems()
    {
        return $this->hasMany(CartItems::class);
    }
    
    public function typeproduct()
    {
        return $this->belongsTo(CartItems::class, 'IdProductType');
    }

}
