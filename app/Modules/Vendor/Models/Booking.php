<?php

namespace Vendor\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'payment_status',
        'vendor_id',
        'from_date',
        'to_date',
    ];

    protected $date = ['from_date','to_date'];

}
