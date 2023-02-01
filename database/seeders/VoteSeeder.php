<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = DB::table('districts')->get();
        DB::table('votes')->delete();
        foreach ($districts as $district) {
            $district_id = DB::table('districts')->where(['name' => $district->name])->first()->id;
            $voters = DB::table('voters')->where(['current_district' => $district->name])->get();
            $candidates = Candidate::where(['current_district' => $district->name])->pluck('id')->toArray();
            $election = DB::table('elections')->first();
            foreach ($voters as $voter) {
                $keys = array_rand($candidates, 3);
                $vote = new Vote();
                $vote->voter_id = $voter->id;
                $vote->election_id = $election->id;
                $vote->district_id = $district_id;
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
}
