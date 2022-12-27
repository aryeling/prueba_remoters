<?php

namespace App\Http\Controllers;

use App\Repositories\ActivityBookingInterface;
use App\Repositories\ActivityInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ActivityBookingController extends Controller
{
    private $activity_booking_interface;
    private $activityInterface;

    public function __construct(ActivityBookingInterface $activity_booking_interface, ActivityInterface $activityInterface )
    {
        $this->activity_booking_interface = $activity_booking_interface;
        $this->activityInterface = $activityInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->activity_booking_interface->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $request->validate([
            'activity_date' => 'required|date',
            'qty_people' => 'required|numeric'
        ]);

        $activities = $this->activityInterface->all();
        $activity_booking = $this->activity_booking_interface->store($request, $id);
        $this->activityInterface->incrementPopularity($id);
        return redirect()->route('activities')
                        ->with('activities',$activities)
                        ->with('success','Reserva realizada exitosamente bajo el N° de Identificador: '.$activity_booking->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
