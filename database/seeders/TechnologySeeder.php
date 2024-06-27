<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Technology::create(['name' => 'Laravel']);
        Technology::create(['name' => 'Vue.js']);
        Technology::create(['name' => 'React']);
        
    }
}
