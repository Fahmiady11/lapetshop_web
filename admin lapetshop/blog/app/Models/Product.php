<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey='IdProduct';
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = [];

    public function pet()
    {
        //return $this->belongsTo('App\Models\Pet');
        return $this->belongsTo( Pet::class, 'Pet_id');
    }
    public function typeproduct()
    {
        //return $this->belongsTo('App\Models\Pet');
        return $this->belongsTo( TypeProduct::class, 'IdProductType');
    }
    public function cartitem()
    {        
        return $this->hasMany( related : CartItem::class);
    }
}