<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable=[
        'category_name', 'category_code', 'description', 'created_by'
    ];
    use HasFactory;

    public function product() : HasMany 
    {
        return $this->hasMany(Product::class);
    }
}
