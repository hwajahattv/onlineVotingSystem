<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Region::create([
            'name' => 'Highlands',
        ]);
        Region::create([
            'name' => 'Islands',
        ]);
        Region::create([
            'name' => 'Momase',
        ]);
        Region::create([
            'name' => 'Southern',
        ]);
    }
}
