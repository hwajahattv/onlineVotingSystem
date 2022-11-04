<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Symfony\Component\Console\Input\Input;

class ElectionController extends Controller
{
    //
    public function electionSection()
    {
        $electionCount = count(Election::all());
        return view('admin.electionSection.electionSectionHome', ['electionCount' => $electionCount]);
    }
    public function addNewElection(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'date' => 'required|date',
        ]);
        $data = $request->all();
        $election = new Election;
        $election->name = $data["name"];
        $election->date_of_election = $data["date"];
        $election->save();
        $response = array(
            'status' => 'success',
            'msg' => 'Election created successfully',
        );
        return response()->json($response);
    }
    public function showElections()
    {
        $allElections = Election::all();
        return view('admin.electionSection.showElections', ['elections' => $allElections]);
    }
    public function editElection($id)
    {
        $targetElection = Election::where(['id' => $id])->first();
        return $targetElection;
    }
    public function editElectionPost(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|max:255',
            'date' => 'required|date',
        ]);
        $data = $request->all();
        $isUpdated = Election::where(['id' => $id])->update(['name' => $data['name'], 'date_of_election' => $data['date']]);
        $response = array(
        'status' => 'success',
        'msg' => 'Election data updated successfully',
        );
        return response()->json($response);
    }
}
