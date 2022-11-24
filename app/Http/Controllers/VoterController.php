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
        $voter->otherReligon = $data["otherReligion"];
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
        $message = 'Voter registered successfully!';
//        dd($message);
        return redirect()->back()->with(['message' => $message]);
    }

    public function showVoters()
    {
        $allVoters = Voter::all();
        return view('admin.voterSection.showVoters', ['voters' => $allVoters]);
    }

    public function showVoterDetails($id)
    {
        $voterDetails = Voter::find($id);
        return \response()->json($voterDetails);
    }

    public function editVoter($id)
    {
        $voter = Voter::where(['id' => $id])->first();
        return view('admin.voterSection.editVoter', ['voter' => $voter]);
    }

    public function editVoterPost(Request $request, $id)

    {
//         dd($request);
        $thisUserData=Voter::find($id);
        $request->validate([
            'name' => 'required|max:25',
            'middleName' => 'required|max:25',
            'surName' => 'required|max:25',
            'age' => 'integer',
            'gender' => 'required',
            'dob' => 'required|date',
            'occupation' => 'required',
            'religion' => 'required',
            'birth_region' => 'required',
            'birth_province' => 'required',
            'birth_district' => 'required',
            'birth_LLG' => 'required',
            'birth_ward' => 'required',
            'birth_village' => 'required',
            'current_region' => 'required',
            'current_province' => 'required',
            'current_district' => 'required',
            'current_LLG' => 'required',
            'current_ward' => 'required',
            'current_village' => 'required'
        ]);
        $data = $request->all();
        if(!array_key_exists("otherReligon",$data)){
            $data['otherReligon']=$thisUserData->otherReligion;
        }
        if(!array_key_exists("school",$data)){
            $data['school']=$thisUserData->school;
        }


        //image validation

        if ($request->hasfile('profilePicture')) {
            $img_tmp = $request->file('profilePicture');

            $extension = $img_tmp->getClientOriginalExtension();

            $filename = uniqid() . '.' . $extension;

            $img_path = 'img/uploads/voter/' . $filename;

            Image::make($img_tmp)->resize(200, 200)->save($img_path);
            $isProfPicUpdated=Voter::where(['id'=>$id])->update(['displayPicture'=>$filename]);
        }
        $isUpdated = Voter::where(['id' => $id])->update([
            'name' => $data['name'],
            'middleName' => $data['middleName'],
            'surName' => $data['surName'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'occupation' => $data['occupation'],
            'school' => $data['occupation'],
            'religion' => $data['occupation'],
            'otherReligion' => $data['occupation'],
            'local_church' => $data['local_church'],
            'birth_region' => $data['birth_region'],
            'birth_province' => $data['birth_province'],
            'birth_district' => $data['birth_district'],
            'birth_LLG' => $data['birth_LLG'],
            'birth_ward' => $data['birth_ward'],
            'birth_village' => $data['birth_village'],
            'current_region' => $data['current_region'],
            'current_province' => $data['current_province'],
            'current_district' => $data['current_district'],
            'current_LLG' => $data['current_LLG'],
            'current_ward' => $data['current_ward'],
            'current_village' => $data['current_village']]);

        // Session::flash('message', 'Task successfully added!');
        $message = 'Voter data updated successfully!';
//        dd($message);
        return redirect(route('voterSection'))->with(['message' => $message]);
    }

    public function deleteVoter($id)
    {
        $voter = Voter::find($id);
        $voter->delete();
        $message = 'Voter deleted successfully!';
//        dd($message);
        return redirect()->back()->with(['dltMessage' => $message]);
    }
}
