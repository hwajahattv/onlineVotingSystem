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
        $religion = [
            "Atheist",
            "Baha'i",
            "Buddhism",
            "Christianity",
            "Hinduism",
            "Islam",
            "Judaism",
            "Others",
        ];
        $marital = [
            "Single",
            "Defacto",
            "Married",
            "Widowed",
            "Divorced",
            "Separated",
        ];
        foreach ($districts as $district) {
            $province = DB::table('provinces')->where(['id' => $district->province_id])->first();
            foreach (range(1, 50) as $index) {
                $keys = array_rand($occupation, 1);
                $religion_key = array_rand($religion, 1);
                $marital_key = array_rand($marital, 1);
                $voter = [
                    'name' => $faker->name(),
                    'email' => $faker->email(),
                    'dob' => $faker->dateTimeBetween('1960-01-01', '2000-12-31')
                        ->format('Y/m/d'),
                    'gender' => 'male',
                    'occupation' => $occupation[$keys],
                    'current_district' => $district->name,
                    'current_province' => $province->name,
                    'religion' => $religion[$religion_key],
                    'maritalStatus' => $marital[$marital_key],
                ];
                $voters[] = $voter;
            }
        }
        Voter::insert($voters);
    }
}
