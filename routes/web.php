<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VoterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Http\Request;
// use Auth;

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

// Route::get('/register', [HomeController::class, 'registerAsVoter'])->name('registerAsVoter');
Route::get('/registerAsVoter', [HomeController::class, 'registerAsVoter'])->name('registerAsVoter');
Route::post('/registerAsVoterPost', [HomeController::class, 'registerAsVoterPost'])->name('registerAsVoterPost');


Route::group(['auth'=> 'middleware'], function () {
    Route::get('/home', [AdminController::class, 'index'])->name('home')->middleware('verified');;
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->middleware('verified');;
    // candidate services
    Route::get('/candidateSection', [CandidateController::class, 'candidateSection'])->name('candidateSection');
    Route::get('/showCandidates', [CandidateController::class, 'showCandidates'])->name('showCandidates');
    // to add New candidate
    Route::get('/addCandidate', [CandidateController::class, 'addCandidate'])->name('addCandidate');
    Route::post('/addCandidate/post', [CandidateController::class, 'addCandidatePost'])->name('addCandidatePost');
    // to edit a candidate
    Route::get('/editCandidate/{id}', [CandidateController::class, 'editCandidate'])->name('editCandidate');
    Route::post('/editCandidatePost/{id}', [CandidateController::class, 'editCandidatePost'])->name('editCandidatePost');
    //
    // voters services
    Route::get('/voterSection', [VoterController::class, 'voterSection'])->name('voterSection');
    Route::get('/showVoters', [VoterController::class, 'showVoters'])->name('showVoters');

    // to add New voter
    Route::get('/addVoter', [VoterController::class, 'addVoter'])->name('addVoter');
    Route::post('/addVoter/post', [VoterController::class, 'addVoterPost'])->name('addVoterPost');
    // to edit a voter
    Route::get('/editVoter/{id}', [VoterController::class, 'editVoter'])->name('editVoter');
    Route::post('/editVoterPost/{id}', [VoterController::class, 'editVoterPost'])->name('editVoterPost');

    // create a new election
    Route::get('/electionSection', [ElectionController::class, 'electionSection'])->name('electionSection');
    Route::post('/addNewElection', [ElectionController::class, 'addNewElection'])->name('addNewElection');
    Route::get('/showElections', [ElectionController::class, 'showElections'])->name('showElections');
    Route::get('/editElection/{id}', [ElectionController::class, 'editElection'])->name('editElection');
    Route::post('/editElectionPost/{id}', [ElectionController::class, 'editElectionPost'])->name('editElectionPost');
});

// *********************************************************************//
// ************Email verification***************************************//
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
//    dd($request);
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');
// *********************************************************************//
// ************Email verification end***********************************//
FacadesAuth::routes();
