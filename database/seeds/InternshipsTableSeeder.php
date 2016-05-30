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
                'begin' => 12-12-2012,
                'status_id' => 1,
                'education_offer_id' => 1,
                'contact_id' => 1,
            ]);

    }
}
