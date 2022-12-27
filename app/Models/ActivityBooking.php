<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'person_quantity',
        'price',
        'activity_booking_date',
        'activity_id',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
