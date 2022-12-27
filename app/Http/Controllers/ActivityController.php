<?php

namespace App\Http\Controllers;

use App\Repositories\ActivityInterface;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    private $activityInterface;

    public function __construct(ActivityInterface $activityInterface )
    {
        $this->activityInterface = $activityInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$activities = $this->activityInterface->all();

        return view('activities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $activity = $this->activityInterface->get($request->id);
        $response['data']['activity'] = $activity;
        $response['data']['listActivities'] = $activity->listActivities;

        return response()->json($response);
    }


    public function getByDateAndQtyPeople(Request $request)
    {
        $activity_date = $request->activity_date;
        $qty_people = $request->qty_people;

        $activities = $this->activityInterface->getByDateAndQtyPeople($activity_date, $qty_people);
        return view('activities', ['activities' => $activities]);
    }
}
