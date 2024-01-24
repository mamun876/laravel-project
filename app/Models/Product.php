<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['product_name','sku', 'cetegory','brand', 'price',  'unit', 'qty','created_by'];

}
