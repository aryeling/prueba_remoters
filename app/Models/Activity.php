<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'dateFrom',
        'dateTo',
        'max_quantity_people',
        'price_person',
        'popularity',
        'activity_id',
    ];

    public function parentActivity(){
        return $this->hasOne(Activity::class, 'id', 'activity_id');
    }

    public function listActivities(){
        return $this->hasMany(Activity::class, 'activity_id', 'id');
    }

    public function activityBooking()
    {
        return $this->hasMany(ActivityBooking::class);
    }

}
