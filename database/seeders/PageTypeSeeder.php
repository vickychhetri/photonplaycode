<?php

namespace Database\Seeders;

use App\Models\PageType;
use Illuminate\Database\Seeder;

class PageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Variable Message Sign',
            'Variable Speed Limit Sign',
            'Protable Variable Message Sign',
            'Vehicle Actuated Speed Display',
            'Led Tickers',
            'Way Finders',
            'Signages - Emergency Exit Sign, Emergency Telephone Sign',
            'Passenger Information Display System',
            'Bus Signs',
            'Lane Control System (LCS)'
        ];

        foreach($data as $i){
            PageType::create([
                'title' => $i,
            ]);
        }
    }
}
