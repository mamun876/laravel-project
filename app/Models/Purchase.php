<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table='purchase';
    protected $fillable=[
        'SupplierName', 'Reference', 'Date', 'Status', 'GrandTotal', 'Paid', 'Due', 'PaymentStatus'
    ];
    use HasFactory;
}
