<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@admin.nl',
                'password' => bcrypt('password'),
                'role_id' => 1
            ]);

        User::create(
            [
                'name' => 'user',
                'email' => 'user@user.nl',
                'password' => bcrypt('password'),
                'role_id' => 2
            ]);

        User::create(
            [
                'name' => 'student',
                'email' => 'student@student.nl',
                'password' => bcrypt('password'),
                'role_id' => 3
            ]);

        User::create(
            [
                'name' => 'teacher',
                'email' => 'teacher@teacher.nl',
                'password' => bcrypt('password'),
                'role_id' => 4
            ]);


        User::create(
            [
                'name' => 'practical trainer',
                'email' => 'practical@practical.nl',
                'password' => bcrypt('password'),
                'role_id' => 5
            ]);
    }
}
