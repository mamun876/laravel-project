<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['name','sku', 'price','qty','image','description', 'attribute_value_id', 'brand_id','category_id', 'store_id', 'availability'];

}
