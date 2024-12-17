<?php

namespace Database\Seeders;

use App\Models\EmailAddress;
use Illuminate\Database\Seeder;

class EmailAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define an array of email addresses
        $emails = [
            ['email' => 'info@photonplay.com', 'status' => 'active', 'code' => 'general'],
            ['email' => 'Pervez.ali@photonplay.com', 'status' => 'active', 'code' => 'general'],
            ['email' => 'larry@photonplay.com', 'status' => 'active', 'code' => 'general'],
            ['email' => 'bksingh@photonplay.com', 'status' => 'active', 'code' => 'general'],
            ['email' => 'Afzaal.habibi@photonplay.com', 'status' => 'active', 'code' => 'general'],
            ['email' => 'anjali.giri.psi@gmail.com', 'status' => 'active', 'code' => 'general'],
        ];

        // Loop through each email address and insert into the database
        foreach ($emails as $email) {
            EmailAddress::create($email);
        }
    }
}
