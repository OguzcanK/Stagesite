<?php

use Illuminate\Database\Seeder;
use App\Crebo;

class CrebosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Crebo::create(
            [
                'name' => 'iets',
                'number' => 1234,
            ]);

    }
}
