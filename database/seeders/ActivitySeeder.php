<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
        	[
                'title' => 'Actividad 1',
                'description' => 'Descripcion de la Actividad 1',
                'dateFrom' => '2022-12-25',
                'dateTo' => '2022-12-27',
                'max_quantity_people' => 10,
                'price_person' => 10.00,
                'popularity' => 0,
                'activity_id' => null,
                'created_at' => Carbon::parse(date('Y-m-d H:i:s'))->format('Y-m-d H:i:s')
        	],
            [
	        	'title' => 'Actividad 2',
                'description' => 'Descripcion de la Actividad 2',
                'dateFrom' => '2023-01-25',
                'dateTo' => '2023-01-27',
                'max_quantity_people' => 50,
                'price_person' => 5.30,
                'popularity' => 0,
                'activity_id' => 1,
                'created_at' => Carbon::parse(date('Y-m-d H:i:s'))->format('Y-m-d H:i:s')
        	],
            [
	        	'title' => 'Actividad 3',
                'description' => 'Descripcion de la Actividad 3',
                'dateFrom' => '2022-12-20',
                'dateTo' => '2022-12-29',
                'max_quantity_people' => 15,
                'price_person' => 50.12,
                'popularity' => 1,
                'activity_id' => null,
                'created_at' => Carbon::parse(date('Y-m-d H:i:s'))->format('Y-m-d H:i:s')
        	],
            [
	        	'title' => 'Actividad 4',
                'description' => 'Descripcion de la Actividad 4',
                'dateFrom' => '2022-12-25',
                'dateTo' => '2022-12-27',
                'max_quantity_people' => 10,
                'price_person' => 10.00,
                'popularity' => 1,
                'activity_id' => 1,
                'created_at' => Carbon::parse(date('Y-m-d H:i:s'))->format('Y-m-d H:i:s')
        	],
            [
	        	'title' => 'Actividad 5',
                'description' => 'Descripcion de la Actividad 1',
                'dateFrom' => '2023-02-12',
                'dateTo' => '2023-02-27',
                'max_quantity_people' => 5,
                'price_person' => 12.10,
                'popularity' => 3,
                'activity_id' => 3,
                'created_at' => Carbon::parse(date('Y-m-d H:i:s'))->format('Y-m-d H:i:s')
        	],
            [
	        	'title' => 'Actividad 6',
                'description' => 'Descripcion de la Actividad 6',
                'dateFrom' => '2022-12-31',
                'dateTo' => '2022-12-31',
                'max_quantity_people' => 10,
                'price_person' => 45.00,
                'popularity' => 0,
                'activity_id' => null,
                'created_at' => Carbon::parse(date('Y-m-d H:i:s'))->format('Y-m-d H:i:s')
        	]

        ]);
    }
}
