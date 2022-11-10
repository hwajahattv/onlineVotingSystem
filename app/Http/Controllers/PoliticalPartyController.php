<?php

namespace App\Http\Controllers;

use App\Models\PoliticalParty;
use Illuminate\Http\Request;
use Image;

class PoliticalPartyController extends Controller
{
    //
    public function politicalPartySection(){
        $partycount = count(PoliticalParty::all());
//        dd($partycount);
        return view('admin.politicalParties.politicalPartiesSection', ['partycount' => $partycount]);
    }
    public function showPoliticalParties(){
        $partiesData = PoliticalParty::all();
//        dd($partycount);
        return view('admin.politicalParties.showPoliticalParties', ['partiesData' => $partiesData]);
    }
    public function addPoliticalParty(){
        return view('admin.politicalParties.addPoliticalParty');
    }
    public function addPoliticalPartyPost(Request $request){
//            dd($request);
        $request->validate([
            'name' => 'required|max:25',
            'profilePicture' =>
                'required|image|mimes:jpg,png,jpeg,gif,svg|max:100',
        ]);

        $data = $request->all();
        $party = new PoliticalParty;
        $party->name = $data["name"];
        $party->since = $data["since"];

        //image validation

        if ($request->hasfile('profilePicture')) {
            $img_tmp = $request->file('profilePicture');

            $extension = $img_tmp->getClientOriginalExtension();

            $filename = uniqid() . '.' . $extension;

            $img_path = 'img/uploads/partyFlags/' . $filename;

            Image::make($img_tmp)->resize(200, 200)->save($img_path);
            $party->flagImage = $filename;
        }
        $party->save();
        return redirect()->route('politicalPartySection');
    }
    public function deleteParty($id){
        $party=PoliticalParty::find($id);
        $party->delete();
        return redirect()->back();
    }
}
