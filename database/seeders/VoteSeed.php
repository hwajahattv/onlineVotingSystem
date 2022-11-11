<?php

namespace Database\Seeders;

use App\Models\Vote;
use Faker\Factory;
use Faker\Provider\pt_PT\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 10;

        for ($i = 1 ; $i<= $limit ; $i++){
            $fake = Factory::create();
            //$this->info($fake->name);
            Vote::create([
                'election_id' => 1,
                'candidate_id' => 6,
                'voter_id' => 1,
            ]);
            Vote::create([
                'election_id' => 1,
                'candidate_id' => 7,
                'voter_id' => 1,
            ]);
            Vote::create([
                'election_id' => 1,
                'candidate_id' => 8,
                'voter_id' => 1,
            ]);
        }
    }
}
