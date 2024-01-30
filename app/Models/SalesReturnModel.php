<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReturnModel extends Model
{
    protected $table='return';
    protected $fillable=[
        'product_name', 'date', 'customer', 'status', 'grand_total', 'paid', 'due', 'payment_status', 'action'
    ];
    use HasFactory;
}
