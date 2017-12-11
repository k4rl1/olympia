<?php

use App\Sports;
use Illuminate\Database\Seeder;

class InitialSports extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sports::create(["name" => "conference"]);
        Sports::create(["name" => "basketball"]);
        Sports::create(["name" => "volleyball"]);
        Sports::create(["name" => "cycling"]);
    }
}
