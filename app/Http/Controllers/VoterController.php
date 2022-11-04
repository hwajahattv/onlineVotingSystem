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
            'name' => 'required|max:255',
            'CNIC' => 'required|max:13|unique:voters,CNIC',
            'phone_no' => 'required|max:11',
            'email' => 'required|email|unique:voters,email',
            'profilePicture' =>
            'required|image|mimes:jpg,png,jpeg,gif,svg|max:100',
        ]);
        $data = $request->all();

        //model call

        $voter = new Voter;

        $voter->name = $data["name"];
        $voter->CNIC = $data["CNIC"];
        $voter->phone_no = $data["phone_no"];
        $voter->email = $data["email"];
        $voter->address = $data["address"];
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
