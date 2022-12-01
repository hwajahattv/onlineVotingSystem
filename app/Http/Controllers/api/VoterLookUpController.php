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
            'current_region' => 'required',
            'current_province' => 'required',
            'current_district' => 'required',
//            'current_LLG' => 'required',
//            'current_ward' => 'required',
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
            ->where(['current_region'=>$request['current_region']])
            ->where(['current_province'=>$request['current_province']])
            ->where(['current_district'=>$request['current_district']])->first();
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
