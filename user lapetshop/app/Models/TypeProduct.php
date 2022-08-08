<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeProduct extends Model
{
    use HasFactory;

    protected $table = 'type_of_product';

    protected $primaryKey='IdType';

    public $timestamps = false;
    
    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(product::class);
    }
}
