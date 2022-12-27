<?php
namespace App\Repositories;
use App\Models\Activity;

class ActivityRepository implements ActivityInterface {
    public function all()
    {
        return Activity::paginate(10);
    }
    public function get($id)
    {
        $activity = Activity::find($id);
        return $activity;

    }
    public function getByDateAndQtyPeople($date, $qty_people)
    {
        $activities = Activity::where('dateFrom', '<=', $date)
        ->where('dateTo', '>=', $date)
        ->where('max_quantity_people','>=',$qty_people)
        ->orderBy('popularity','DESC')
        ->paginate(10);
        return $activities;
    }

    public function incrementPopularity($id)
    {
        if(Activity::find($id)->increment('popularity', 1)){
            return true;
        }
        return false;
    }

}
