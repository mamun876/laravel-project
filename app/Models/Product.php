<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{

    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['product_name','sku', 'category_id','brand_id', 'price',  'unit', 'qty','created_by'];

    public function brand() : BelongsTo 
    {
        return $this->belongsTo(Brand::class);
    }
    
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
