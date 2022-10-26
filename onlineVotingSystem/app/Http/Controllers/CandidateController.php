<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
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
        $candidateCount = count(Candidate::all());
        return view('admin.candidateSection.candidateSectionHome', ['candidateCount' => $candidateCount]);
    }

    public function addCandidate()
    {
        return view('admin.candidateSection.addCandidate');
    }
    public function addCandidatePost(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'CNIC' => 'required|max:13|unique:candidates,CNIC',
            'phone_no' => 'required|max:11',
            'email' => 'required|email|unique:candidates,email',
            'profilePicture' =>
            'required|image|mimes:jpg,png,jpeg,gif,svg|max:100',
        ]);
        $data = $request->all();

        //model call

        $cand = new Candidate;

        $cand->name = $data["name"];
        $cand->CNIC = $data["CNIC"];
        $cand->phone_no = $data["phone_no"];
        $cand->email = $data["email"];
        $cand->address = $data["address"];
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
    public function showCandidates()
    {
        $allCandidates = Candidate::all();
        return view('admin.candidateSection.showCandidates', ['candidates' => $allCandidates]);
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
}
