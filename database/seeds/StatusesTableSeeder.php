<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(

            [
                'name' => 'starting',
                'categorie_id' => '2'
            ]);
        Status::create(
            [
                'name' => 'in progress',
                'categorie_id' => '2'
            ]);
        Status::create(
            [
                'name' => 'done',
                'categorie_id' => '2'
            ]);
    }
}
