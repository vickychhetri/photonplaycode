<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExchangeRatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exchangeRates = [
            ['country_code'=>'CA','currency_code' => 'CAD', 'exchange_rate' => 1.35],
            ['country_code'=>'IN','currency_code' => 'INR', 'exchange_rate' => 83.12],
            ['country_code'=>'EU','currency_code' => 'EUR', 'exchange_rate' => 0.94],
            ['country_code'=>'GB','currency_code' => 'GBP', 'exchange_rate' => 0.78],
        ];

        DB::table('currencies')->insert($exchangeRates);
    }
}
