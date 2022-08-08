<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $primaryKey='IdUser';
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = [];
    use HasFactory;
    public function cart()
    {
        return $this->hasMany( related : Cart::class);
    }
}
