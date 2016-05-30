<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create(
            [
                'streetnumber' => 222,
                'street' => 'popjesstraat',
                'postcode' => '3333ZZ',
                'state' => 'Somewhere',
                'company_id' => 1,
            ]);

    }
}
