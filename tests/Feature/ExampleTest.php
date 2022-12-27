<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Activity;
use App\Models\ActivityBooking;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/activities');

        $response->assertStatus(200);
    }

    public function test_create_activity()
    {
        Activity::factory(5)->haslistActivities(Activity::factory()->count(2))->create();

        $this->assertTrue(true);
    }

    public function test_create_activity_booking()
    {
        $this->withoutExceptionHandling();
        $activity = Activity::first();

        ActivityBooking::create([
            'person_quantity' => $activity->max_quantity_people,
            'price' => $activity->price_person * $activity->max_quantity_people,
            'activity_booking_date' => $activity->dateFrom,
            'activity_id' => $activity->id,
        ]);

        $this->assertTrue(true);
    }
}
