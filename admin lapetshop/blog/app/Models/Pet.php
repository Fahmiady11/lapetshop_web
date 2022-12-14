<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = [];
    public function product()
    {        
        return $this->hasMany( related : Product::class);
    }
}
