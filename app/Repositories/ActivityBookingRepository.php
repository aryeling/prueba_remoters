<?php
namespace App\Repositories;

use App\Models\Activity;
use App\Models\ActivityBooking;

class ActivityBookingRepository implements ActivityBookingInterface {
    public function all()
    {
        return ActivityBooking::paginate(10);
    }
    public function get($id)
    {
        return 'algo';
    }
    public function store($data, $id)
    {
        $activity = Activity::find($id);
        $activity_booking = ActivityBooking::create([
            'person_quantity' => $data->input('qty_people'),
            'price' => $activity->price_person * $data->input('qty_people'),
            'activity_booking_date' => $data->input('activity_date'),
            'activity_id' => $activity->id,
        ]);
        return $activity_booking;
    }



}
