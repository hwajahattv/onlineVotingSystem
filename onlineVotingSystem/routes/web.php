<?php

use App\Http\Controllers\CandidateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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

Route::get('/', function () {
    return view('welcome');
});
FacadesAuth::routes();
Route::group(['auth'=>'middleware'],function(){
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/candidateSection', [CandidateController::class,'candidateSection'])->name('candidateSection');
Route::get('/showCandidates', [CandidateController::class,'showCandidates'])->name('showCandidates');
// to add New candidate
Route::get('/addCandidate', [CandidateController::class,'addCandidate'])->name('addCandidate');
Route::post('/addCandidate/post', [CandidateController::class,'addCandidatePost'])->name('addCandidatePost');
// to edit a candidate
Route::get('/editCandidate/{id}', [CandidateController::class,'editCandidate'])->name('editCandidate');
Route::post('/editCandidatePost/{id}', [CandidateController::class,'editCandidatePost'])->name('editCandidatePost');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
