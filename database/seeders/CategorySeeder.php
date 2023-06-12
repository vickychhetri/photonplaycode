<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Radar Speed Signs',
            'Portable Variable Signs',
        ];

        foreach($data as $i){
            Category::create([
                'title' => $i,
            ]);
        }
    }
}
