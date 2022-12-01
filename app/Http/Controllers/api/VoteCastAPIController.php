<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Election;
use App\Models\Vote;
use App\Models\Voter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VoteCastAPIController extends Controller
{
    //
    public function castVote($id)
    {
        $voter = Voter::find(intval($id));
        if ($voter == null) {
            return [
                "status" => 0,
                "message" => 'Voter ID not Found! Find your Voter ID or get registered as voter first.'
            ];
        } else {
            if ($voter->current_region == null || $voter->current_province == null || $voter->current_district == null || $voter->current_LLG = null || $voter->current_ward == null) {
                return [
                    "status" => 0,
                    "message" => 'Voter data not filled completely. Update your record or get re-registered.'
                ];
            } else {
                $region = $voter->current_region;
                $province = $voter->current_province;
                $district = $voter->current_district;
                $LLG = $voter->current_LLG;
                $ward = $voter->current_ward;
                $election = Election::all();
                $candidates = Candidate::where(['current_region' => $region])
                    ->where(['current_province' => $province])
                    ->where(['current_district' => $district])
                    ->where(['current_LLG' => $LLG])
                    ->where(['current_ward' => $ward]
                    )->with('politicalParty')->get();
//    dd($candidates,$allCandidates, $voter,$region, $province, $district, $LLG, $ward);

                return [
                    "status" => 1,
                    "message" => 'Voter data found',
                    'voter' => $voter,
                    'election' => $election,
                    'candidates' => $candidates,
                ];
            }
        }
    }
    public function castVotePost(Request $request, $id)
    {
//        dd($request);
        $data = $request->all();


//          request validation
        $validator = Validator::make($request->all(), [
            'election_id' => 'required',
            'candidate_id' => 'required',
            'voter_id' => 'required',
        ]);

        if ($validator->fails()) {
            $message ="";
            return [
                "status" => 0,
                'message' =>$validator->messages()->all(),
            ];
        }
        $vote = new Vote;
        $vote->election_id = ($request['election_id']);
        $vote->candidate_id = ($request['candidate_id']);
        $vote->voter_id = ($request['voter_id']);
        $vote->save();
        return [
            "status" => 1,
            "message" => 'Your vote has been casted.',

        ];
    }

}
