<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Province::create([

            'name' => 'Chimbu(Simbu)',
            'region_id' => 1
        ]);
        Province::create([

            'name' => 'Eastern Highlands',
            'region_id' => 1
        ]);
        Province::create([

            'name' => 'Enga',
            'region_id' => 1
        ]);
        Province::create([

            'name' => 'Southern Highlands',
            'region_id' => 1
        ]);
        Province::create([

            'name' => 'Western Highlands',
            'region_id' => 1
        ]);
        Province::create([

            'name' => 'Hela',
            'region_id' => 1
        ]);
        Province::create([

            'name' => 'Jiwaka',
            'region_id' => 1
        ]);
        Province::create([

            'name' => 'East New Britain',
            'region_id' => 2
        ]);
        Province::create([

            'name' => 'Manus',
            'region_id' => 2
        ]);
        Province::create([

            'name' => 'NewIreland',
            'region_id' => 2
        ]);
        Province::create([

            'name' => 'Bougainville',
            'region_id' => 2
        ]);
        Province::create([

            'name' => 'West New Britain',
            'region_id' => 2
        ]);

        Province::create([

            'name' => 'East Sepik',
            'region_id' => 3
        ]);
        Province::create([

            'name' => 'Madang',
            'region_id' => 3
        ]);
        Province::create([

            'name' => 'Morobe',
            'region_id' => 3
        ]);
        Province::create([

            'name' => 'Sandaun (West Sepik)',
            'region_id' => 3
        ]);

        Province::create([

            'name' => 'Central',
            'region_id' => 4
        ]);
        Province::create([

            'name' => 'Gulf',
            'region_id' => 4
        ]);
        Province::create([

            'name' => 'Milne Bay',
            'region_id' => 4
        ]);
        Province::create([

            'name' => 'Oro (Northern)',
            'region_id' => 4
        ]);
        Province::create([

            'name' => 'Western (Fly)',
            'region_id' => 4
        ]);
        Province::create([

            'name' => 'National Capital District',
            'region_id' => 4
        ]);


    }
}
