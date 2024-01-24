<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable=[
        'category_name', 'category_code', 'description', 'created_by'
    ];
    use HasFactory;
}
