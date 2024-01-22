<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table ='sales';
    protected $fillable=[
        'Date', 'CustomerName', 'Referance', 'Status', 'Payment', 'Total', 'Paid', 'Due', 'Biller', 'Action'
    ];
}
