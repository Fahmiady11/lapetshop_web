<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Buyers extends Authenticatable
{
    use HasFactory;
    // use Notifiable;

    protected $primaryKey='IdUser';

    protected $guarded = [];
    
    public $timestamps = false;

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    
    public function baskets()
    {
        return $this->hasMany(Baskets::class);
    }
}
