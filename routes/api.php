<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\VoterLookUpController;
use App\Models\Candidate;
/*
|--------------------------------------------------------------------------
| api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your api!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/findMe', [VoterLookUpController::class, 'findMe'])->name('findMeAPI');
Route::get('/test', function (){
    return 'It is working.';
});
Route::get('/test1', function (){
    $cand = Candidate::all();
    return $cand;
});


