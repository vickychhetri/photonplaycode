<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageFeature;
use App\Models\PageSpec;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class signagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //way finders
        $wayFinders = Page::create([
            'page_type_id' => 7,
            'title' => 'WAY FINDERS',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'meta_title' => 'enter your meta title',
            'meta_keyword' => 'enter your meta keyword',
            'schema' => 'enter your schema',
            'slug' => Str::slug('WAY FINDERS')
        ]);

        $wayFindersSpecs = [
            [
                'page_id' => $wayFinders->id,
                'spec' => 'Display',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $wayFinders->id,
                'spec' => 'Mechanical',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $wayFinders->id,
                'spec' => 'ELectronics and Electrical',
                'description' => 'test_desc',
            ]
        ];

        foreach($wayFindersSpecs as $i){
            PageSpec::create($i);
        }

        $wayFindersFeature = [
            [
                'page_id' => $wayFinders->id,
                'feature' => 'MAINTAINENCE FREE',
                'description' => 'Maintainance Free Operation with dry cell sealed batteries',
            ],
            [
                'page_id' => $wayFinders->id,
                'feature' => 'ULTRA LOW POWER CONSUMPTION',
                'description' => '',
            ],
            [
                'page_id' => $wayFinders->id,
                'feature' => 'CERTIFICATIONS',
                'description' => 'IP65 & EN12966',
            ],
            [
                'page_id' => $wayFinders->id,
                'feature' => 'ULTRA BRIGHT',
                'description' => '',
            ],
            [
                'page_id' => $wayFinders->id,
                'feature' => 'EXCELLENT READABILITY',
                'description' => '',
            ],
            [
                'page_id' => $wayFinders->id,
                'feature' => 'DEVICE HEALTH STATUS FEEDBACK',
                'description' => '',
            ],
        ];

        foreach($wayFindersFeature as $i){
            PageFeature::create($i);
        }

        // emergency exit sign
        $ees = Page::create([
            'page_type_id' => 7,
            'title' => 'EMERGENCY EXIT SIGN',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'meta_title' => 'enter your meta title',
            'meta_keyword' => 'enter your meta keyword',
            'schema' => 'enter your schema',
            'slug' => Str::slug('EMERGENCY EXIT SIGN')
        ]);

        $eesSpecs = [
            [
                'page_id' => $ees->id,
                'spec' => 'Display',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $ees->id,
                'spec' => 'Mechanical',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $ees->id,
                'spec' => 'ELectronics and Electrical',
                'description' => 'test_desc',
            ]
        ];

        foreach($eesSpecs as $i){
            PageSpec::create($i);
        }

        $eesFeature = [
            [
                'page_id' => $ees->id,
                'feature' => 'MAINTAINENCE FREE',
                'description' => 'Maintainance Free Operation with dry cell sealed batteries',
            ],
            [
                'page_id' => $ees->id,
                'feature' => 'ULTRA LOW POWER CONSUMPTION',
                'description' => '',
            ],
            [
                'page_id' => $ees->id,
                'feature' => 'CERTIFICATIONS',
                'description' => 'IP65 & EN12966',
            ],
            [
                'page_id' => $ees->id,
                'feature' => 'ULTRA BRIGHT',
                'description' => '',
            ],
            [
                'page_id' => $ees->id,
                'feature' => 'EXCELLENT READABILITY',
                'description' => '',
            ],
        ];

        foreach($eesFeature as $i){
            PageFeature::create($i);
        }

        //emergency telephone sign
        $ees = Page::create([
            'page_type_id' => 7,
            'title' => 'EMERGENCY TELEPHONE SIGN',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'meta_title' => 'enter your meta title',
            'meta_keyword' => 'enter your meta keyword',
            'schema' => 'enter your schema',
            'slug' => Str::slug('EMERGENCY TELEPHONE SIGN')
        ]);

        $eesSpecs = [
            [
                'page_id' => $ees->id,
                'spec' => 'Display',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $ees->id,
                'spec' => 'Mechanical',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $ees->id,
                'spec' => 'ELectronics and Electrical',
                'description' => 'test_desc',
            ]
        ];

        foreach($eesSpecs as $i){
            PageSpec::create($i);
        }

        $eesFeature = [
            [
                'page_id' => $ees->id,
                'feature' => 'MAINTAINENCE FREE',
                'description' => 'Maintainance Free Operation with dry cell sealed batteries',
            ],
            [
                'page_id' => $ees->id,
                'feature' => 'ULTRA LOW POWER CONSUMPTION',
                'description' => '',
            ],
            [
                'page_id' => $ees->id,
                'feature' => 'CERTIFICATIONS',
                'description' => 'IP65 & EN12966',
            ],
            [
                'page_id' => $ees->id,
                'feature' => 'ULTRA BRIGHT',
                'description' => '',
            ],
            [
                'page_id' => $ees->id,
                'feature' => 'EXCELLENT READABILITY',
                'description' => '',
            ],
        ];

        foreach($eesFeature as $i){
            PageFeature::create($i);
        }
    }
}
