<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $table='transfer';
    protected $fillable=[
        'date', 'from', 'paid', 'items', 'status', 'action'
    ];
    use HasFactory;
}
