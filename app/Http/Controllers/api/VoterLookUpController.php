<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VoterLookUpController extends Controller
{
    //
    public function findMe(Request $request){
//    dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25',
            'surName' => 'required|max:25',
            'birth_region' => 'required',
            'birth_province' => 'required',
            'birth_district' => 'required',
//            'birth_LLG' => 'required',
//            'birth_ward' => 'required',
        ]);
        if ($validator->fails()) {
            $message ="";
            return [
                "status" => 0,
                'message' =>$validator->messages()->all(),
            ];
        }

        $requiredVoter=Voter::
        where(['name'=>$request['name']])
            ->where(['surName'=>$request['surName']])
            ->where(['birth_region'=>$request['birth_region']])
            ->where(['birth_province'=>$request['birth_province']])
            ->where(['birth_district'=>$request['birth_district']])->first();
        if($requiredVoter==null){
            return [
                "status" => 0,
                "data" =>"Voter not Found"
            ];
        }
        else
            return [
                "status" => 1,
                "data" =>$requiredVoter
            ];
    }

}
