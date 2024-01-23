<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table='place';
    protected $fillable=[
        'country_name', 'region', 'status',
    ];
    use HasFactory;
}
