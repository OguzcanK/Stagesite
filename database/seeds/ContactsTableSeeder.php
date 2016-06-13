<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create(
            [
                'surename' => 'pieters',
                'firstname' => 'Tapas',
                'email' => 'tapas@pieters.qs',
                'phonenumber' => '0622233311',
                'company_id' => 1,
            ]);

        Contact::create(
            [
                'surename' => 'kappa',
                'firstname' => 'Terro',
                'email' => 'terro@kappa.kp',
                'phonenumber' => '0622233311',
                'company_id' => 2,
            ]);

    }
}
