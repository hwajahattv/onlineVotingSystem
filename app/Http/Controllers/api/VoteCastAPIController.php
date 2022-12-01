<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Election;
use App\Models\Voter;
use Illuminate\Http\Request;

class VoteCastAPIController extends Controller
{
    //
    public function castVote($id)
    {
        $voter = Voter::find($id);
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
                $candidates = Candidate::where(['current_region' => $region])->where(['current_province' => $province])->where(['current_district' => $district])->where(['current_LLG' => $LLG])->where(['current_ward' => $ward])->with('politicalParty')->get();
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
}
