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
            $voter->middleName = $data["middleName"];
            $voter->surName = $data["surName"];
            $voter->age = $data["age"];
            $voter->dob = $data["surName"];
            $voter->occupation = $data["occupation"];
            if($data['occupation']=="School"){
                $voter->school = $data["school"];
            }
            $voter->religion = $data["religion"];
            if($data["religion"] == "others"){
                $voter->otherReligion = $data["otherReligion"];
            }
            $voter->local_church = $data["local_church"];
            $voter->current_region = $data["current_region"];
            $voter->current_province = $data["current_province"];
            $voter->current_district = $data["current_district"];
            $voter->current_LLG = $data["current_LLG"];
            $voter->current_ward = $data["current_ward"];


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
