<?php

use App\Http\Controllers\MailController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VoterController;
use \App\Http\Controllers\PoliticalPartyController;
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
})->name('public.home');

Route::get('/getCSRF', function()
{
    return csrf_token();
});

// Route::get('/register', [HomeController::class, 'registerAsVoter'])->name('registerAsVoter');
Route::get('/registerAsVoter', [HomeController::class, 'registerAsVoter'])->name('registerAsVoter');
Route::post('/registerAsVoterPost', [HomeController::class, 'registerAsVoterPost'])->name('registerAsVoterPost');
Route::get('/registerAsCandidate', [HomeController::class, 'registerAsCandidate'])->name('registerAsCandidate');
Route::post('/registerAsCandidatePost', [HomeController::class, 'registerAsCandidatePost'])->name('registerAsCandidatePost');

Route::get('/voterLookUp', [HomeController::class, 'voterLookUp'])->name('voterLookUp');
Route::get('/pollingSchedule', [HomeController::class, 'pollingSchedule'])->name('pollingSchedule');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');


//Route::get('/electionVideoPage', [HomeController::class, 'electionVideoPage'])->name('electionVideoPage');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/allRegionOffices', [HomeController::class, 'allRegionOffices'])->name('allRegionOffices');
Route::post('/findMe', [HomeController::class, 'findMe'])->name('findMe');
//Route::get('/selectElection', [HomeController::class, 'selectElection'])->name('selectElection');
Route::get('/castVote/{id}', [HomeController::class, 'castVote'])->name('castVoteWeb');
Route::post('/castVotePost/{id}', [HomeController::class, 'castVotePost'])->name('castVotePost');
Route::get('/resultsHome', [HomeController::class, 'resultsHome'])->name('resultsHome');
Route::post('/fetchResults', [HomeController::class, 'fetchResults'])->name('fetchResults');
Route::post('/login',[LoginController::class, 'login'])->name('login_customized');
//Route::post('/addDistrict',[HomeController::class, 'addDistrict'])->name('addDistrict');
//Route::post('/addLLG',[HomeController::class, 'addLLG'])->name('addLLG');
//Route::post('/addWard',[HomeController::class, 'addWard'])->name('addWard');
//Route::post('/getProvinceID',[HomeController::class, 'getProvinceID'])->name('getProvinceID');
//Route::post('/getDistrictID',[HomeController::class, 'getDistrictID'])->name('getDistrictID');
//Route::post('/getLLGID',[HomeController::class, 'getLLGID'])->name('getLLGID');

Route::group(['middleware' => ['auth','SuperAdmin',]], function () {
        Route::get('/adminUsers', [AdminController::class, 'adminUsers'])->name('adminUsers');
        Route::post('/addNewUser', [AdminController::class, 'addNewUser'])->name('addNewUser');
        Route::get('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');
        Route::post('/userRoleUpdate', [AdminController::class, 'userRoleUpdate'])->name('userRoleUpdate');
        Route::get('/sendmail/{id}', [MailController::class, 'index'])->name('sendmail');
});
        Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->middleware('auth');
Route::group(['middleware' => ['auth','verified']], function () {
        Route::get('/home', [AdminController::class, 'index'])->name('home');
        // candidate services
        Route::get('/candidateSection', [CandidateController::class, 'candidateSection'])->name('candidateSection');
        Route::get('/showCandidates', [CandidateController::class, 'showCandidates'])->name('showCandidates');
        Route::get('/candidate/show/{id}', [CandidateController::class, 'showCandidateDetails'])->name('candidate.show');
        // to add New candidate
        Route::get('/addCandidate', [CandidateController::class, 'addCandidate'])->name('addCandidate');
        Route::post('/addCandidate/post', [CandidateController::class, 'addCandidatePost'])->name('addCandidatePost');
        // to edit a candidate
        Route::get('/editCandidate/{id}', [CandidateController::class, 'editCandidate'])->name('editCandidate');
        Route::post('/editCandidatePost/{id}', [CandidateController::class, 'editCandidatePost'])->name('editCandidatePost');
        //to delete a candidate
        Route::get('/deleteCandidate/{id}', [CandidateController::class, 'deleteCandidate'])->name('deleteCandidate');

        //    Political Party routes
        Route::get('/politicalPartySection', [PoliticalPartyController::class, 'politicalPartySection'])->name('politicalPartySection')->middleware('SuperAdmin');
        Route::get('/showPoliticalParties', [PoliticalPartyController::class, 'showPoliticalParties'])->name('showPoliticalParties');

        // to add New Political Party
        Route::get('/addPoliticalParty', [PoliticalPartyController::class, 'addPoliticalParty'])->name('addPoliticalParty');
        Route::post('/addPoliticalParty/post', [PoliticalPartyController::class, 'addPoliticalPartyPost'])->name('addPoliticalPartyPost');
        // to edit a Political Party
        Route::get('/editParty/{id}', [PoliticalPartyController::class, 'editParty'])->name('editParty');
        Route::post('/editPartyPost/{id}', [PoliticalPartyController::class, 'editPartyPost'])->name('editPartyPost');
        //to delete a Political Party
        Route::get('/deleteParty/{id}', [PoliticalPartyController::class, 'deleteParty'])->name('deleteParty');

        // voters services
        Route::get('/voterSection', [VoterController::class, 'voterSection'])->name('voterSection');
        Route::get('/showVoters', [VoterController::class, 'showVoters'])->name('showVoters');
        Route::get('/voter/show/{id}', [VoterController::class, 'showVoterDetails'])->name('voter.show');

        // to add New voter
        Route::get('/addVoter', [VoterController::class, 'addVoter'])->name('addVoter');
        Route::post('/addVoter/post', [VoterController::class, 'addVoterPost'])->name('addVoterPost');
        // to edit a voter
        Route::get('/editVoter/{id}', [VoterController::class, 'editVoter'])->name('editVoter');
        Route::post('/editVoterPost/{id}', [VoterController::class, 'editVoterPost'])->name('editVoterPost');
        //to delete a voter
        Route::get('/deleteVoter/{id}', [VoterController::class, 'deleteVoter'])->name('deleteVoter');

        // create a new election
        Route::get('/electionSection', [ElectionController::class, 'electionSection'])->name('electionSection');
        Route::post('/addNewElection', [ElectionController::class, 'addNewElection'])->name('addNewElection');
        Route::get('/showElections', [ElectionController::class, 'showElections'])->name('showElections');
        Route::get('/editElection/{id}', [ElectionController::class, 'editElection'])->name('editElection');
        Route::post('/editElectionPost/{id}', [ElectionController::class, 'editElectionPost'])->name('editElectionPost');
    });

//->middleware('SuperAdmin')
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
