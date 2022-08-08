<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    use HasFactory;
    protected $table='type_of_product';
    protected $primaryKey='IdType';
    protected $fillable = [];
    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
