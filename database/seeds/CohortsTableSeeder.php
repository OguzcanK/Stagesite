<?php

use Illuminate\Database\Seeder;
use App\Cohort;

class CohortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cohort::create(
            [
                'name' => 'testcohort',
                'schoolyear' => '1',
                'crebo_id' => 1,
            ]);
    }
}
