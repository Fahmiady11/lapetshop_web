<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baskets extends Model
{
    use HasFactory;

    protected $primaryKey='IdUser';

    public $timestamps = false;

    protected $guarded = [];

    public function buyers()
    {
        return $this->belongsTo(Buyers::class, 'IdUser');
    }
    
    public function products()
    {
        return $this->belongsTo(Products::class, 'IdProduct');
    }
}
