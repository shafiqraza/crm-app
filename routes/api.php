<?php

use App\Http\Resources\TodayResource;
use App\Http\Resources\UpcomingResource;
use App\Models\Today;
use App\Models\Upcoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// get upcoming tasks
Route::get('/upcoming', function () {
    $upcomings = Upcoming::all();
    return UpcomingResource::collection($upcomings);
});

// get today tasks
Route::get('/today', function () {
    $todays = Today::all();
    return TodayResource::collection($todays);
});

// add upcoming tasks
Route::post('/upcoming', function (Request $req) {
    return Upcoming::create([
        "title" => $req->title,
        "waiting" => $req->waiting,
        "task_id" => $req->task_id,
    ]);
});

// delete upcoming tasks
Route::delete('/upcoming/{$id}', function ($id) {
    DB::table("upcomings")->where("task_id", $id)->delete();
    return 204;
});

// add todays tasks
Route::post('/today', function (Request $req) {
    return Today::create([
        "id" => $req->id,
        "title" => $req->title,
        "task_id" => $req->task_id,
    ]);
});

// delete today tasks
Route::delete('/upcoming/{$id}', function ($id) {
    DB::table("todays")->where("task_id", $id)->delete();
    return 204;
});
