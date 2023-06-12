<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageFeature;
use App\Models\PageImage;
use App\Models\PageSpec;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class vmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $smartcity = Page::create([
            'page_type_id' => 1,
            'title' => 'SMART CITY VMS',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'meta_title' => 'enter your meta title',
            'meta_keyword' => 'enter your meta keyword',
            'schema' => 'enter your schema',
            'slug' => Str::slug('SMART CITY VMS')
        ]);

        $smartcitySpecs = [
            [
                'page_id' => $smartcity->id,
                'spec' => 'Optic',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $smartcity->id,
                'spec' => 'Display Metrix',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $smartcity->id,
                'spec' => 'Mechanical',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $smartcity->id,
                'spec' => 'ELectronics and Electrical',
                'description' => 'test_desc',
            ]
        ];

        foreach($smartcitySpecs as $i){
            PageSpec::create($i);
        }

        $smartCityFeature = [
            [
                'page_id' => $smartcity->id,
                'feature' => 'MAINTAINENCE FREE',
                'description' => 'Maintainance Free Operation with dry cell sealed batteries',
            ],
            [
                'page_id' => $smartcity->id,
                'feature' => 'CLOUD CONNECTED',
                'description' => 'Onboard GSM/4G Based Connectivity',
            ],
            [
                'page_id' => $smartcity->id,
                'feature' => 'NTCIP PROTOCOL',
                'description' => 'Supports NTCIP Protocol as well as Photonplay`s Standard SignCom',
            ],
            [
                'page_id' => $smartcity->id,
                'feature' => 'PROTOCOL CERTIFICATIONS',
                'description' => 'IP65 & EN12966',
            ],
            [
                'page_id' => $smartcity->id,
                'feature' => 'ULTRA LOW POWER CONSUMPTION',
                'description' => '',
            ],
            [
                'page_id' => $smartcity->id,
                'feature' => 'MULTILINGUAL SUPPORT',
                'description' => '',
            ],
            [
                'page_id' => $smartcity->id,
                'feature' => 'INBUILT ENVIRONMENTAL SENSORS Integration with ITEMS',
                'description' => '',
            ],
        ];

        foreach($smartCityFeature as $i){
            PageFeature::create($i);
        }

        // solar vms
        $solarVms = Page::create([
            'page_type_id' => 1,
            'title' => 'SOLAR VMS',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'meta_title' => 'enter your meta title',
            'meta_keyword' => 'enter your meta keyword',
            'schema' => 'enter your schema',
            'slug' => Str::slug('SOLAR VMS')
        ]);

        $solarVmsSpecs = [
            [
                'page_id' => $solarVms->id,
                'spec' => 'Optic',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $solarVms->id,
                'spec' => 'Display Metrix',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $solarVms->id,
                'spec' => 'Mechanical',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $solarVms->id,
                'spec' => 'ELectronics and Electrical',
                'description' => 'test_desc',
            ]
        ];

        foreach($solarVmsSpecs as $i){
            PageSpec::create($i);
        }

        $solarVmsFeature = [
            [
                'page_id' => $solarVms->id,
                'feature' => 'MAINTAINENCE FREE',
                'description' => 'Maintainance Free Operation with dry cell sealed batteries',
            ],
            [
                'page_id' => $solarVms->id,
                'feature' => 'CLOUD CONNECTED',
                'description' => 'Onboard GSM/4G Based Connectivity',
            ],
            [
                'page_id' => $solarVms->id,
                'feature' => 'NTCIP PROTOCOL',
                'description' => 'Supports NTCIP Protocol as well as Photonplay`s Standard SignCom',
            ],
            [
                'page_id' => $solarVms->id,
                'feature' => '6 DAYS BATTERY BACKUP',
                'description' => '6 Days of Battery backup in `No Sun Conditions`',
            ],
            [
                'page_id' => $solarVms->id,
                'feature' => 'CERTIFICATIONS',
                'description' => 'IP65 & EN12966',
            ],
            [
                'page_id' => $solarVms->id,
                'feature' => '100% UPTIME',
                'description' => 'GIves 100% uptime with no dependency on Grid Power and broken wires',
            ],
        ];

        foreach($solarVmsFeature as $i){
            PageFeature::create($i);
        }

        //standard vms
        $standardVms = Page::create([
            'page_type_id' => 1,
            'title' => 'STANDARD VMS',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'meta_title' => 'enter your meta title',
            'meta_keyword' => 'enter your meta keyword',
            'schema' => 'enter your schema',
            'slug' => Str::slug('STANDARD VMS')
        ]);

        $standardVmsSpecs = [
            [
                'page_id' => $standardVms->id,
                'spec' => 'Optic',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $standardVms->id,
                'spec' => 'Display Metrix',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $standardVms->id,
                'spec' => 'Mechanical',
                'description' => 'test_desc',
            ],
            [
                'page_id' => $standardVms->id,
                'spec' => 'ELectronics and Electrical',
                'description' => 'test_desc',
            ]
        ];

        foreach($standardVmsSpecs as $i){
            PageSpec::create($i);
        }

        $standardVmsFeature = [
            [
                'page_id' => $standardVms->id,
                'feature' => 'MAINTAINENCE FREE',
                'description' => 'Maintainance Free Operation with dry cell sealed batteries',
            ],
            [
                'page_id' => $standardVms->id,
                'feature' => 'CLOUD CONNECTED',
                'description' => 'Onboard GSM/4G Based Connectivity',
            ],
            [
                'page_id' => $standardVms->id,
                'feature' => 'NTCIP PROTOCOL',
                'description' => 'Supports NTCIP Protocol as well as Photonplay`s Standard SignCom',
            ],
            [
                'page_id' => $standardVms->id,
                'feature' => 'ULTRA LOW POWER CONSUMPTION',
                'description' => '',
            ],
            [
                'page_id' => $standardVms->id,
                'feature' => 'CERTIFICATIONS',
                'description' => 'IP65 & EN12966',
            ],
            [
                'page_id' => $standardVms->id,
                'feature' => '100% UPTIME',
                'description' => 'GIves 100% uptime with no dependency on Grid Power and broken wires',
            ],
        ];

        foreach($standardVmsFeature as $i){
            PageFeature::create($i);
        }
    }
}
