<?php

namespace Vendor\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;
use Venue\Models\Venue;

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

    protected $dates = ['from_date','to_date'];


    public function scopeActive($q){
        return $q->where('status', 'Approved');
    }

    public function venues(){
        return $this->belongsToMany(Venue::class,'venue_bookings');
    }

    public function applications(){
        return $this->hasMany(Application::class, 'booking_id');
    }

    public function vendor(){
        return $this->belongsTo(User::class, 'vendor_id');
    }


    public function payments(){
        return $this->hasMany(Payment::class, 'booking_id');
    }


}
