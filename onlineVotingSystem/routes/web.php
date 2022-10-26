<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VoterController;
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
Route::get('/registerAsVoter', [HomeController::class,'registerAsVoter'])->name('registerAsVoter');
Route::post('/registerAsVoterPost', [HomeController::class,'registerAsVoterPost'])->name('registerAsVoterPost');

FacadesAuth::routes();
Route::group(['auth'=>'middleware'],function(){
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// candidate services
Route::get('/candidateSection', [CandidateController::class,'candidateSection'])->name('candidateSection');
Route::get('/showCandidates', [CandidateController::class,'showCandidates'])->name('showCandidates');
// to add New candidate
Route::get('/addCandidate', [CandidateController::class,'addCandidate'])->name('addCandidate');
Route::post('/addCandidate/post', [CandidateController::class,'addCandidatePost'])->name('addCandidatePost');
// to edit a candidate
Route::get('/editCandidate/{id}', [CandidateController::class,'editCandidate'])->name('editCandidate');
Route::post('/editCandidatePost/{id}', [CandidateController::class,'editCandidatePost'])->name('editCandidatePost');
// 
// voters services
Route::get('/voterSection', [VoterController::class,'voterSection'])->name('voterSection');
Route::get('/showVoters', [VoterController::class,'showVoters'])->name('showVoters');

// to add New voter
Route::get('/addVoter', [VoterController::class,'addVoter'])->name('addVoter');
Route::post('/addVoter/post', [VoterController::class,'addVoterPost'])->name('addVoterPost');
// to edit a voter
Route::get('/editVoter/{id}', [VoterController::class,'editVoter'])->name('editVoter');
Route::post('/editVoterPost/{id}', [VoterController::class,'editVoterPost'])->name('editVoterPost');

// create a new election
Route::post('/addNewElection', [ElectionController::class,'addNewElection'])->name('addNewElection');

});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
