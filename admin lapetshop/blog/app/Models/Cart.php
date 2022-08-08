<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $primaryKey='IdPurchase';
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = [];

    public function buyer()
    {
        //return $this->belongsTo('App\Models\Pet');
        return $this->belongsTo( Buyer::class, 'Buyer');
    }
    public function admin()
    {
        //return $this->belongsTo('App\Models\Pet');
        return $this->belongsTo( Admin::class, 'IdAdmin');
    }
    public function cartitem()
    {        
        return $this->hasMany( related : CartItem::class);
    }
}
