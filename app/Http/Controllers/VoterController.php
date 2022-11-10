<?php

namespace App\Http\Controllers;

use App\Models\Voter;
use Illuminate\Http\Request;
use Image;

class VoterController extends Controller
{
    //
    public function voterSection()
    {
        $voterCount = count(Voter::all());
        return view('admin.voterSection.voterSectionHome', ['voterCount' => $voterCount]);
    }
    public function addVoter()
    {
        return view('admin.voterSection.addVoter');
    }
    public function addVoterPost(Request $request)
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
    public function showVoters()
    {
        $allVoters = Voter::all();
        return view('admin.voterSection.showVoters', ['voters' => $allVoters]);
    }
    public function showVoterDetails($id){
        $voterDetails= Voter::find($id);
        return \response()->json($voterDetails);
    }
    public function editVoter($id)
    {
        $voter = Voter::where(['id' => $id])->first();
        return view('admin.voterSection.editVoter', ['voter' => $voter]);
    }
    public function editVoterPost(Request $request, $id)

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

            $img_path = 'img/uploads/voter/' . $filename;

            Image::make($img_tmp)->resize(200, 200)->save($img_path);
        } else {
            $voter = Voter::where(['id' => $id])->first();
            $filename = $voter->displayPicture;
        }
        $isUpdated = Voter::where(['id' => $id])->update(['name' => $data['name'], 'address'
        => $data['address'], 'phone_no' => $data['phone_no'], 'CNIC' => $data['CNIC'], 'displayPicture' => $filename]);
        // Session::flash('message', 'Task successfully added!');
        return redirect()->back()->with(['message', 'Voter data updated successfully!']);
    }
}
