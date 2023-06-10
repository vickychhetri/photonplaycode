<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageFeature;
use App\Models\PageSpec;
use Illuminate\Database\Seeder;

class pidsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page1 = Page::create([
            'page_type_id' => 8,
            'title' => 'Passenger Information Display System (PIDS)',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'meta_title' => 'enter your meta title',
            'meta_keyword' => 'enter your meta keyword',
            'schema' => 'enter your schema',
        ]);

        $data = [
            [
                'page_id' => $page1->id,
                'spec' => 'Optic',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $page1->id,
                'spec' => 'Display Metrix',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $page1->id,
                'spec' => 'Mechanical',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $page1->id,
                'spec' => 'ELectronics and Electrical',
                'description' => 'test_desc',
            ]
        ];

        foreach($data as $i){
            PageSpec::create($i);
        }

        $data1 = [
            [
                'page_id' => $page1->id,
                'feature' => 'MAINTAINENCE FREE',
                'description' => 'Maintainance Free Operation with dry cell sealed batteries',
            ],
            [
                'page_id' => $page1->id,
                'feature' => 'CERTIFICATIONS',
                'description' => 'IP65 & EN12966',
            ],
            [
                'page_id' => $page1->id,
                'feature' => 'CLOUD CONNECTED',
                'description' => 'Onboard GSM/4G Based Connectivity',
            ],
            [
                'page_id' => $page1->id,
                'feature' => 'NTCIP PROTOCOL',
                'description' => 'Supports NTCIP Protocol as well as Photonplay`s Standard SignCom',
            ],
            [
                'page_id' => $page1->id,
                'feature' => 'PROTOCOL CERTIFICATIONS',
                'description' => 'IP65 & EN12966',
            ],
            [
                'page_id' => $page1->id,
                'feature' => 'ULTRA LOW POWER CONSUMPTION',
                'description' => '',
            ],
            [
                'page_id' => $page1->id,
                'feature' => 'MULTILINGUAL SUPPORT',
                'description' => '',
            ],
        ];

        foreach($data1 as $i){
            PageFeature::create($i);
        }

    }
}
