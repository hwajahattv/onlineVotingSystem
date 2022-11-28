<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Voter;
use Illuminate\Http\Request;

class VoterRegisterationController extends Controller
{
    //
    public function registerAsVoterPostTest(Request $request){
        {

            $data = $request->all();

            //model call

            $voter = new Voter;

            $voter->name = $data["name"];
            $voter->birth_region = $data["birth_region"];


            //image validation
            $status=$voter->save();
            $message ="";

            if($status==false){
                return [
                    "status" => 0,
                    "$message" =>"Voter not created"
                ];
            }
            else
                return [
                    "status" => 1,
                    "$message" =>"Voter created"
                ];
        }

    }

}
