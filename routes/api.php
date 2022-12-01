<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\VoterLookUpController;
use App\Models\Candidate;
use App\Http\Controllers\api\VoterRegisterationController;
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

Route::get('/regions', function (){
    $regions = \App\Models\Region::all();
    return $regions;
});
Route::get('/provinces/{id}', function ($id){
    $provinces = \App\Models\Province::where(['region_id'=>$id])->get(['id', 'name']);
    return $provinces;
});
Route::get('/districts/{id}', function ($id){
    $districts = \App\Models\District::where(['province_id'=>$id])->get(['id', 'name']);
    return $districts;
});
Route::get('/llgs/{id}', function ($id){
    $LLG = \App\Models\LLG::where(['district_id'=>$id])->get(['id', 'name']);
    return $LLG;
});
Route::get('/wards/{id}', function ($id){
    $wards = \App\Models\Ward::where(['l_l_g_id'=>$id])->get(['id', 'name']);
    return $wards;
});
Route::get('/parties', function (){
    $parties = \App\Models\PoliticalParty::all();
    return $parties;
});

//Route::post('/registerAsVoterPost', [\App\Http\Controllers\api\VoterRegisterationController::class, 'registerAsVoterPost'])->name('registerAsVoterPost');
Route::post('/registerAsVoterPost/test', [\App\Http\Controllers\api\VoterRegisterationController::class, 'registerAsVoterPostTest'])->name('registerAsVoterPostTest');
Route::post('/registerAsCandidatePost/test', [\App\Http\Controllers\api\CandidateRegistrationController::class, 'registerAsCandidatePost'])->name('registerAsCandidatePostAPI');
Route::get('/castVote/{id}', [\App\Http\Controllers\api\VoteCastAPIController::class, 'castVote'])->name('castVote');



