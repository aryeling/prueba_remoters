<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ActivityBookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [ActivityController::class, 'index']);
Route::get('/activities', [ActivityController::class, 'index'])->name('activities');
Route::get('/activities/getByDateAndQty', [ActivityController::class, 'getByDateAndQtyPeople'])->name('activities.dateqty');
Route::post('/activities/buy/{id}', [ActivityBookingController::class, 'store'])->name('activities.buy');
Route::post('/activities/get', [ActivityController::class, 'show'])->name('activities.show');
