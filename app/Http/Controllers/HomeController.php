<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Election;
use App\Models\PoliticalParty;
use App\Models\Vote;
use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('admin.dashboard');
    // }
    public function registerAsVoter()
    {
        return view('registerAsVoter');
    }

    public function registerAsCandidate()
    {
        $politicalPartyList = PoliticalParty::all();
        return view('registerAsCandidate', ['politicalPartyList' => $politicalPartyList]);
    }

    public function registerAsVoterPost(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'surName' => 'required|max:25',
            'age' => 'integer',
            'gender' => 'required',
            'dob' => 'required|date',
            'occupation' => 'required',
            'religion' => 'required',
            'birth_region' => 'required',
            'birth_province' => 'required',
            'current_region' => 'required',
            'current_province' => 'required',
            'profilePicture' =>
                'required|image|mimes:jpg,png,jpeg,gif,svg|max:100',
        ]);
        $data = $request->all();

        //model call

        $voter = new Voter;

        $voter->name = $data["name"];
        $voter->middleName = $data["middleName"];
        $voter->surName = $data["surName"];
        $voter->dob = $data["dob"];
        $voter->age = $data["age"];
        $voter->gender = $data["gender"];
        $voter->occupation = $data["occupation"];
        $voter->school = $data["school"];
        $voter->religion = $data["religion"];
        $voter->local_church = $data["local_church"];
        $voter->birth_region = $data["birth_region"];
        $voter->birth_province = $data["birth_province"];
        $voter->birth_district = $data["birth_district"];
        $voter->birth_LLG = $data["birth_LLG"];
        $voter->birth_ward = $data["birth_ward"];
        $voter->birth_village = $data["birth_village"];
        $voter->current_region = $data["current_region"];
        $voter->current_province = $data["current_province"];
        $voter->current_district = $data["current_district"];
        $voter->current_LLG = $data["current_LLG"];
        $voter->current_ward = $data["current_ward"];
        $voter->current_village = $data["current_village"];

        //image validation

        if ($request->hasfile('profilePicture')) {
            $img_tmp = $request->file('profilePicture');

            $extension = $img_tmp->getClientOriginalExtension();

            $filename = uniqid() . '.' . $extension;

            $img_path = 'img/uploads/voter/' . $filename;

            Image::make($img_tmp)->resize(200, 200)->save($img_path);
            $voter->displayPicture = $filename;
        }

        $voter->save();
        return redirect()->back()->with(['message', 'Message sent!']);
    }

    public function registerAsCandidatePost(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'surName' => 'required|max:25',
            'age' => 'integer',
            'gender' => 'required',
            'dob' => 'required|date',
            'occupation' => 'required',
            'religion' => 'required',
            'birth_region' => 'required',
            'birth_province' => 'required',
            'current_region' => 'required',
            'current_province' => 'required',
            'policeClearanceCertificate' => 'required',
            'political_party' => 'required',
            'profilePicture' =>
                'required|image|mimes:jpg,png,jpeg,gif,svg|max:100',
        ]);
        $data = $request->all();

        //model call

        $cand = new Candidate;

        $cand->name = $data["name"];
        $cand->middleName = $data["middleName"];
        $cand->surName = $data["surName"];
        $cand->dob = $data["dob"];
        $cand->age = $data["age"];
        $cand->gender = $data["gender"];
        $cand->occupation = $data["occupation"];
        $cand->school = $data["school"];
        $cand->religion = $data["religion"];
        $cand->local_church = $data["local_church"];
        $cand->birth_region = $data["birth_region"];
        $cand->birth_province = $data["birth_province"];
        $cand->birth_district = $data["birth_district"];
        $cand->birth_LLG = $data["birth_LLG"];
        $cand->birth_ward = $data["birth_ward"];
        $cand->birth_village = $data["birth_village"];
        $cand->current_region = $data["current_region"];
        $cand->current_province = $data["current_province"];
        $cand->current_district = $data["current_district"];
        $cand->current_LLG = $data["current_LLG"];
        $cand->current_ward = $data["current_ward"];
        $cand->current_village = $data["current_village"];
        $cand->political_party_id = $data["political_party"];
        $cand->policeClearanceCertificate = $data["policeClearanceCertificate"];


        //image validation

        if ($request->hasfile('profilePicture')) {
            $img_tmp = $request->file('profilePicture');

            $extension = $img_tmp->getClientOriginalExtension();

            $filename = uniqid() . '.' . $extension;

            $img_path = 'img/uploads/candidate/' . $filename;

            Image::make($img_tmp)->resize(200, 200)->save($img_path);
            $cand->displayPicture = $filename;
        }

        $cand->save();
        return redirect()->back()->with(['message', 'Message sent!']);
    }

    public function voterLookUp()
    {
        return view('voterLookUp');
    }

    public function pollingSchedule()
    {
        return view('electionSchedule');
    }

    public function faq()
    {
        return view('faq');
    }

    public function electionVideoPage()
    {
        return view('electionVideoPage');
    }

    public function contact()
    {
        return view('contact');
    }

    public function allRegionOffices()
    {
        return view('allRegionOffices');
    }

    public function findMe(Request $request)
    {
//    dd($request);
        $request->validate([
            'name' => 'required|max:25',
            'surName' => 'required|max:25',
            'birth_region' => 'required',
            'birth_province' => 'required',
            'birth_district' => 'required',
//            'birth_LLG' => 'required',
//            'birth_ward' => 'required',
        ]);

        $requiredVoter = Voter::where(['name' => $request['name']])->where(['surName' => $request['surName']])->first();
        if ($requiredVoter != null) {
            return \response()->json($requiredVoter);
        }
        return \response("null");
    }

    public function castVote($id)
    {
        $voter = Voter::find($id);
//        dd($voter);
        $allCandidates=Candidate::all();
        $region = $voter->current_region;
        $province = $voter->current_province;
        $district = $voter->current_district;
        $LLG = $voter->current_LLG;
        $ward = $voter->current_ward;
        $election = Election::all();
        $candidates = Candidate::where(['current_region' => $region])->where(['current_province' => $province])->where(['current_district' => $district])->where(['current_LLG' => $LLG])->where(['current_ward' => $ward])->with('politicalParty')->get();
//    dd($candidates,$allCandidates, $voter,$region, $province, $district, $LLG, $ward);

        return view('castVote', ['elections' => $election, 'candidates'=> $candidates, 'voter'=>$voter]);
    }
    public function castVotePost(Request $request, $id){
//        dd($request);
        $vote= new Vote;
        $vote->election_id=$request['electionID'];
        $vote->candidate_id=$request['candidateID'];
        $vote->voter_id=$request['voterID'];
        $vote->save();
        return redirect('/');
    }
    public function resultsHome(){
        $election = Election::all();
        return view('resultsHome',['elections' => $election]);
    }
    public function fetchResults(Request $request){
//        dd($request);
        if($request['region']!=null){
            if($request['province']!=null){
                if($request['district']!=null){
                    $candidatesData = Candidate::where(['current_region' => $request['region']])
                        ->where(['current_province' => $request['province']])
                        ->where(['current_district' => $request['district']])
                        ->with('politicalParty')
                        ->get();
                    $candidates=$candidatesData->pluck('id')->toArray();
                    $voteCount = DB::table('votes')
                        ->select('candidate_id', DB::raw('Count(*) as c'))
                        ->groupBy('candidate_id')
                        ->whereIn('candidate_id', $candidates)
                        ->having('c', '>', 1)
                        ->get();
                }
            }
        }
//                    dd($voteCount,$candidatesData);
        return view('pollingResultsPage',['count'=>$voteCount, 'candidates'=>$candidatesData]);
    }
}
