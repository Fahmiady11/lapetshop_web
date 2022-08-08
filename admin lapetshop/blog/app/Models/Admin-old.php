<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    
    protected $primaryKey='IdAdmin';
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = [];
    use HasFactory;
    public function cart()
    {
        return $this->hasMany( related : Cart::class);
    }
}

