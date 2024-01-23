<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table= 'quotation';
    protected $fillable=[
        'product_name', 'reference', 'customer_name', 'status', 'grand_total', 'action'
    ];
    use HasFactory;
}
