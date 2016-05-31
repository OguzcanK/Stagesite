<?php

use Illuminate\Database\Seeder;
use App\Internship;

class InternshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Internship::create(
            [
                'begin' => 2012-12-12,
                'end' => 2013-06-06,
                'status_id' => 1,
                'education_offer_id' => 1,
                'contact_id' => 1,
            ]);

        Internship::create(
            [
                'begin' => 2013-12-12,
                'end' => 2014-06-06,
                'status_id' => 2,
                'education_offer_id' => 1,
                'contact_id' => 2,
            ]);

    }
}
