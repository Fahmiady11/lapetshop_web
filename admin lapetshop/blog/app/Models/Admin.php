<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table='admins';
    protected $primaryKey='IdAdmin';
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = ['IdAdmin'];
    use HasFactory;
    public function cart()
    {
        return $this->hasMany( related : Cart::class);
    }
}
