<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table='people';
    protected $fillable=[
        'customer_name','code', 'customer','phone','email', 'country', 'action', 
    ];
    use HasFactory;
}
