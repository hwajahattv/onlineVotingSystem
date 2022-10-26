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
    public function addNewElection(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'date' => 'required|date',
        ]);

        // $rules = array('name' => 'required|max:255', 'date' => 'required');
        // $validator = Validator::make(Input::all(), $rules);
        // if ($validator->fails())
        // {
        //     dd('test');
        // return Response::json(array(
        // 'success' => false,
        // 'errors' => $validator->getMessageBag()->toArray()

        // ), 400); // 400 being the HTTP code for an invalid request.
        // }
        // return Response::json(array('success' => true), 200);
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
}
