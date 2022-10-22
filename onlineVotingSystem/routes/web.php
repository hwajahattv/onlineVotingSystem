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
Route::get('/addCandidate', [CandidateController::class,'addCandidate'])->name('addCandidate');
Route::get('/editCandidate', [CandidateController::class,'editCandidate'])->name('editCandidate');
Route::post('/addCandidate/post', [CandidateController::class,'addCandidatePost'])->name('addCandidatePost');
Route::get('/showCandidates', [CandidateController::class,'showCandidates'])->name('showCandidates');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
