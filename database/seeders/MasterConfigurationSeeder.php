<?php

namespace Database\Seeders;

use App\Models\MasterConfiguration;
use Illuminate\Database\Seeder;

class MasterConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterConfiguration::create([
            'code' => 'product_category_multi_not_required',
            'value' => '1',
            'status' => '1',
        ]);
    }
}
