<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CandidateRegistrationController extends Controller
{
    //
    public function registerAsCandidatePost(Request $request){
        {

            $data = $request->all();

//          request validatopn
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:50',
                'middleName' => 'required|string|max:50',
                'surName' => 'required|string|max:50',
                'occupation' => 'required|string|max:50',
                'religion' => 'required|string|max:50',
                'local_church' => 'required|string',
                'current_region' => 'required|string',
                'current_province' => 'required|string',
                'current_district' => 'required|string',
                'current_LLG' => 'required|string',
                'current_ward' => 'required|string',
                'policeClearanceCertificate' => 'required|string',
                'political_party' => 'required|string',
            ]);

            if ($validator->fails()) {
                return [
                    "status" => 0,
                    'message' =>$validator->messages()->all(),
                ];
            }

            //model call

            $candidate = new Candidate();

            $candidate->name = $data["name"];
            $candidate->middleName = $data["middleName"];
            $candidate->surName = $data["surName"];
            $candidate->age = intval($data["age"]);
            $candidate->dob = $data["dob"];
            $candidate->occupation = $data["occupation"];
            if($data['occupation']=="School"){
                $candidate->school = $data["school"];
            }
            $candidate->religion = $data["religion"];
            if($data["religion"] == "others"){
                $candidate->otherReligion = $data["otherReligion"];
            }
            $candidate->local_church = $data["local_church"];
            $candidate->current_region = $data["current_region"];
            $candidate->current_province = $data["current_province"];
            $candidate->current_district = $data["current_district"];
            $candidate->current_LLG = $data["current_LLG"];
            $candidate->current_ward = $data["current_ward"];
            $candidate->political_party_id = $data["political_party"];
            $candidate->policeClearanceCertificate = intval($data["policeClearanceCertificate"]);


            //image validation
            $status=$candidate->save();

            if($status==false){
                return [
                    "status" => 0,
                    "message" =>"Candidate not registered!"
                ];
            }
            else
                return [
                    "status" => 1,
                    "message" =>"Candidate registered successfully!"
                ];
        }

    }

}
