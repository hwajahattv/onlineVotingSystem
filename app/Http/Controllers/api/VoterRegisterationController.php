<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class VoterRegisterationController extends Controller
{
    //
    public function registerAsVoterPostTest(Request $request)
    {
        {

            $data = $request->all();


//          request validation
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:50',
                'middleName' => 'required|string|max:50',
                'surName' => 'required|string|max:50',
                'dob' => 'required|string|max:50',
                'age' => 'required|string|max:50',
                'occupation' => 'required|string|max:50',
                'religion' => 'required|string|max:50',
                'local_church' => 'required|string',
                'current_region' => 'required|string',
                'current_province' => 'required|string',
                'current_district' => 'required|string',
                'current_LLG' => 'required|string',
                'current_ward' => 'required|string',
            ]);

            if ($validator->fails()) {
                $message = "";
                return [
                    "status" => 0,
                    'message' => $validator->messages()->all(),
                ];
            }

            //model call

            $voter = new Voter;

            $voter->name = $data["name"];
            $voter->middleName = $data["middleName"];
            $voter->surName = $data["surName"];
            $voter->age = intval($data["age"]);
            $voter->dob = $data["dob"];
            $voter->occupation = $data["occupation"];
            if ($data['occupation'] == "School") {
                $voter->school = $data["school"];
            }
            $voter->religion = $data["religion"];
            if ($data["religion"] == "others") {
                $voter->otherReligion = $data["otherReligion"];
            }
            $voter->local_church = $data["local_church"];
            $voter->current_region = $data["current_region"];
            $voter->current_province = $data["current_province"];
            $voter->current_district = $data["current_district"];
            $voter->current_LLG = $data["current_LLG"];
            $voter->current_ward = $data["current_ward"];

            $status = $voter->save();
            $message = "";

            if ($status == false) {
                return [
                    "status" => 0,
                    "message" => "Voter not created"
                ];
            } else
                return [
                    "status" => 1,
                    "message" => "Voter created"
                ];
        }

    }

    public function imageUpload(Request $request)
    {
        if ($request->hasfile('profilePicture')) {
            $img_tmp = $request->file('profilePicture');

            $extension = $img_tmp->getClientOriginalExtension();

            $filename = uniqid() . '.' . $extension;

            $img_path = 'img/uploads/candidate/' . $filename;

            Image::make($img_tmp)->resize(200, 200)->save($img_path);
            return [
                "status" => 1,
                "message" => "Image saved"
            ];
        } else {
            return [
                "status" => 0,
                "message" => "Image not saved"
            ];
        }
    }

}
