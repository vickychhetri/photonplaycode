<?php

namespace Database\Seeders;

use App\Models\ContentPage;
use Illuminate\Database\Seeder;

class StaticContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContentPage::query()->delete();
        ContentPage::create([
                'page_name'=>'about-us',
                'title'=>'About us',
                'image'=>'about.png',
                'description'=>'just description'
            ]);
        ContentPage::create([
            'page_name'=>'term-conditions',
                'title'=>'Term-Conditions',
                'image'=>'terms.png',
                'description'=>'just description'
        ]);

        ContentPage::create([
            'page_name'=>'privacy-policy',
                'title'=>'Privacy Policy',
                'image'=>'privacy.png',
                'description'=>'just description'
        ]);
        ContentPage::create([
            'page_name'=>'shipping',
            'title'=>'Shipping',
            'image'=>'privacy.png',
            'description'=>'just description'
        ]);
        ContentPage::create([
            'page_name'=>'return-policy',
            'title'=>'Refund/Return-Policy',
            'image'=>'privacy.png',
            'description'=>'just description'
        ]);

    }
}
