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
                'name' => 'starting'
            ]);
        Status::create(
            [
                'name' => 'in progress'
            ]);
        Status::create(
            [
                'name' => 'done'
            ]);
    }
}
