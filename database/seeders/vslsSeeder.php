<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageFeature;
use App\Models\PageSpec;
use Illuminate\Database\Seeder;

class vslsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vsls = Page::create([
            'page_type_id' => 2,
            'title' => 'Variable Speed Limit Signs (VSLS)',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'meta_title' => 'enter your meta title',
            'meta_keyword' => 'enter your meta keyword',
            'schema' => 'enter your schema',
        ]);

        $data = [
            [
                'page_id' => $vsls->id,
                'spec' => 'Optic',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $vsls->id,
                'spec' => 'Display Metrix',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $vsls->id,
                'spec' => 'Mechanical',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $vsls->id,
                'spec' => 'ELectronics and Electrical',
                'description' => 'test_desc',
            ]
        ];

        foreach($data as $i){
            PageSpec::create($i);
        }

        $data1 = [
            [
                'page_id' => $vsls->id,
                'feature' => 'MAINTAINENCE FREE',
                'description' => 'Maintainance Free Operation with dry cell sealed batteries',
            ],
            [
                'page_id' => $vsls->id,
                'feature' => 'CERTIFICATIONS',
                'description' => 'IP65 & EN12966',
            ],
            [
                'page_id' => $vsls->id,
                'feature' => '100% UPTIME',
                'description' => 'Gives 100% uptime with no dependency on Grid Power and broken wires',
            ],
            [
                'page_id' => $vsls->id,
                'feature' => 'EXCELLENT READABILITY - FOR HIGH SPPED DRIVERS',
                'description' => 'Intelligent intensity control. Automatic adjustment of luminosity',
            ],
            [
                'page_id' => $vsls->id,
                'feature' => 'ULTRA LOW POWER CONSUMPTION',
                'description' => '',
            ],
        ];

        foreach($data1 as $i){
            PageFeature::create($i);
        }
    }
}
