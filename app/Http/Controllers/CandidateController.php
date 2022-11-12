<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\PoliticalParty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Session;

class CandidateController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function candidateSection()
    {
        $candidateCount = Candidate::all()->count();
        $candidateInEachParty = Candidate::select('political_party_id', DB::raw('Count(*) as c'))
            ->with('politicalParty')
            ->groupBy('political_party_id')
            ->get();


//        dd($candidateCountInEachParty);
        return view('admin.candidateSection.candidateSectionHome', ['candidateCount' => $candidateCount,'candidateInEachParty'=>$candidateInEachParty]);
    }

    public function addCandidate()
    {
        $politicalPartyList= PoliticalParty::all();
//        dd($politicalPartyList);
        return view('admin.candidateSection.addCandidate',['politicalPartyList'=>$politicalPartyList]);
    }
    public function addCandidatePost(Request $request)
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
        $message='Candidate registered successfully!';
//        dd($message);
        return redirect()->back()->with(['message'=>$message ]);
    }
    public function showCandidates()
    {
        $allCandidates = Candidate::with('politicalParty')->get();
        return view('admin.candidateSection.showCandidates', ['candidates' => $allCandidates]);
    }
    public function showCandidateDetails($id){
//        $candidateDetails= Candidate::find($id);
        $candidateDetails= Candidate::where(['id'=>$id])->with('politicalParty')->first();
        return \response()->json($candidateDetails);
    }
    public function editCandidate($id)
    {
        $candidate = Candidate::where(['id' => $id])->first();
        return view('admin.candidateSection.editCandidate', ['candidate' => $candidate]);
    }
    public function editCandidatePost(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|max:255',
            'CNIC' => 'required|max:13',
            'phone_no' => 'required|max:11',
            'profilePicture' =>
            'image|mimes:jpg,png,jpeg,gif,svg|max:100',
        ]);
        $data = $request->all();

        //image validation

        if ($request->hasfile('profilePicture')) {
            $img_tmp = $request->file('profilePicture');

            $extension = $img_tmp->getClientOriginalExtension();

            $filename = uniqid() . '.' . $extension;

            $img_path = 'img/uploads/candidate/' . $filename;

            Image::make($img_tmp)->resize(200, 200)->save($img_path);
        }
        else{
            $candidate=Candidate::where(['id' =>$id])->first();
            $filename = $candidate->displayPicture;
        }
        $isUpdated= Candidate::where(['id' =>$id])->update(['name' =>$data['name'],'address' =>$data['address'],'phone_no'=>$data['phone_no'],'CNIC'=>$data['CNIC'],'displayPicture'=>$filename]);
        // Session::flash('message', 'Task successfully added!');
        return redirect()->back()->with(['message', 'Candidate data updated successfully!']);
    }
    public function deleteCandidate($id){
//        dd($id);
        $candidate=Candidate::find($id);
        $candidate->delete();

        $message='Candidate deleted successfully!';
//        dd($message);
        return redirect()->back()->with(['dltMessage'=>$message ]);
    }
}
