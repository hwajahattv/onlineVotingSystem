<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\PoliticalParty;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('candidates')->delete();
        $parties = PoliticalParty::pluck('id')->toArray();
        $faker = Faker::create();
        $districts = DB::table('districts')->get();
        $candidates = [];
        $occupation = [
            "Student",
            "Self Employed",
            "Subsistence Farmer",
            "House wife",
            "Public Servant",
            "Private Sector Worker",
            "Religious Worker",
            "others"
        ];

        foreach ($districts as $district) {
            $province = DB::table('provinces')->where(['id' => $district->province_id])->first();
            $region = DB::table('regions')->where(['id' => $province->region_id])->first();
            $keys_party = array_rand($parties, 4);
            foreach (range(1, 4) as $index) {
                $keys = array_rand($occupation, 1);
                $candidate = [
                    'name' => $faker->name(),
                    'email' => $faker->email(),
                    'dob' => $faker->dateTimeBetween('1960-01-01', '2000-12-31')
                        ->format('Y/m/d'),
                    'gender' => 'male',
                    'occupation' => $occupation[$keys],
                    'current_region' => $region->name,
                    'current_province' => $province->name,
                    'current_district' => $district->name,
                    'political_party_id' => $parties[$keys_party[$index]],
                ];
                $candidates[] = $candidate;
            }
        }
        Candidate::insert($candidates);
    }
}
