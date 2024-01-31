<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseReturnModel extends Model
{
    protected $table= 'purchaseReturn';
    protected $fillable=[
        'image', 'date', 'supplier', 'reference', 'status', 'grand_total', 'paid', 'due', 'payment' ,
    ];
    use HasFactory;
}
