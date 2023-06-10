<?php

namespace Database\Seeders;

use App\Models\Specilization;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            StaticContentSeeder::class,
            SettingSeeder::class,
            CategorySeeder::class,
            PageTypeSeeder::class,
            lcsSeeder::class,
            pidsSeeder::class,
            signagesSeeder::class,
            vmsSeeder::class,
            vslsSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
