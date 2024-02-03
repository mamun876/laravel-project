<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    protected $table = 'brand';
    protected $fillable = [
        'image', 'brand_name', 'brand_description', 'action',
    ];
    use HasFactory;

    // public function product() : HasMany 
    // {
    //     return $this->hasMany(Product::class);
    // }
    public function product():HasMany{
        return $this->hasMany(Product::class);
    }
}
