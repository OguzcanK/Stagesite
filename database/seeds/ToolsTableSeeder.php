<?php

use Illuminate\Database\Seeder;
use App\Tool;

class ToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tool::create(
            [
                'name' => 'php',
                'description' => 'dit is de tool php',
                'status_id' => 1,
            ]);
        Tool::create(
            [
                'name' => 'Laravel',
                'description' => 'dit is de tool Laravel',
                'status_id' => 1,
            ]);
    }
}
