<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Voter;
use Illuminate\Http\Request;

class VoterLookUpController extends Controller
{
    //
    public function findMe(Request $request){
//    dd($request);
        $request->validate([
            'name' => 'required|max:25',
            'surName' => 'required|max:25',
            'birth_region' => 'required',
            'birth_province' => 'required',
            'birth_district' => 'required',
//            'birth_LLG' => 'required',
//            'birth_ward' => 'required',
        ]);

        $requiredVoter=Voter::where(['name'=>$request['name']])->where(['surName'=>$request['surName']])->first();
        if($requiredVoter==null){
            return \response("null");
        }
        else
            return \response()->json($requiredVoter);
    }

}
