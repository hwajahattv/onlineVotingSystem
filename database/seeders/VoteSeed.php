<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Vote;
use Faker\Factory;
use Faker\Provider\pt_PT\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $voters = DB::table('voters')->where(['current_district' => 'CHUAVE'])->get();
        dd($voters);
        $candidates = Candidate::where(['current_district' => 'CHUAVE'])->pluck('id')->toArray();
        $election = DB::table('elections')->first();
        foreach ($voters as $voter) {
            $keys = array_rand($candidates, 3);
            $vote = new Vote();
            $vote->voter_id = $voter->id;
            $vote->election_id = $election->id;
            $vote->save();
            $pref_1 = $candidates[$keys[0]];
            $pref_2 = $candidates[$keys[1]];
            $pref_3 = $candidates[$keys[2]];
            DB::table('vote_preferences')->insert([
                'vote_id' => $vote->id,
                'first_candidate_id' => $pref_1,
                'second_candidate_id' => $pref_2,
                'third_candidate_id' => $pref_3,
            ]);
        }
    }
}
