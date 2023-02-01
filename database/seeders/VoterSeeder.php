<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Voter;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $districts = DB::table('districts')->get();
        DB::table('voters')->delete();
        // $parties = PoliticalParty::pluck('id')->toArray();
        $faker = Factory::create();
        $voters = [];
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
            foreach (range(1, 100) as $index) {
                $keys = array_rand($occupation, 1);
                $voter = [
                    'name' => $faker->name(),
                    'email' => $faker->email(),
                    'dob' => $faker->dateTimeBetween('1960-01-01', '2000-12-31')
                        ->format('Y/m/d'),
                    'gender' => 'male',
                    'occupation' => $occupation[$keys],
                    'current_district' => $district->name,
                ];
                $voters[] = $voter;
            }
        }
        Voter::insert($voters);
    }
}
