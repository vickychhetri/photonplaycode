<?php

namespace Database\Seeders;

use App\Models\ManageSeo;
use Illuminate\Database\Seeder;

class ManageSeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seo =[
              [
                  "page_name"=>ManageSeo::HOME,
                  "title"=>"Experience Dynamic Message & Radar Speed with Photonplay",
                  "description"=>"Photonplay engages in the development, manufacture, and marketing of LED display screens and products.",
                  "created_at"=>now(),
                  "updated_at"=>now(),
              ],
            [
                "page_name"=>ManageSeo::COMPANY,
                "title"=>"PhotonPlay's Innovative Highway Solution | About Us",
                "description"=>"We are a leading provider of innovative information systems for highways & mass transit. Discover our cutting-edge solutions today!",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "page_name"=>ManageSeo::HIGHWAYS,
                "title"=>"Experience Smart VMS Signs, Portable VMS, VSLS, VASD",
                "description"=>"Discover advanced information systems for highways including VMS signs, portable VMS signs, VSLS signs, & VASD solutions. Explore now!",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "page_name"=>ManageSeo::VMS,
                "title"=>"PhotonPlay: High-End Variable Message Signs & Displays",
                "description"=>"Delivers cutting-edge variable message signs (VMS) & displays for effective communication. Explore our VMS sign boards now!",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "page_name"=>ManageSeo::PVMS,
                "title"=>"Portable VMS | Variable Message Signs | Experience Excellence",
                "description"=>"Unleash the power of our visionary team's R&D efforts. Discover our cutting-edge solutions crafted by developers, designers, and innovators. Experience excellence today!",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "page_name"=>ManageSeo::TUNNELS,
                "title"=>"PhotonPlay Provides Smoother Tunnel Experience",
                "description"=>"Transform your tunnels with comprehensive monitoring, ventilation control and incident management. Our technology ensures a smoother overall tunnel experience.",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "page_name"=>ManageSeo::SIGNAGE,
                "title"=>"Enhance Tunnel Safety with Our Custom Signages",
                "description"=>"We provide a variety of signs made especially for tunnel safety. Our signage not only gives drivers clear information but also contributes to the safety. Trust us!",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "page_name"=>ManageSeo::SMARTCITY,
                "title"=>"Transforming Cities into Smart and Sustainable Hubs",
                "description"=>"Our expertise ranges from intelligent traffic management to efficient public transportation, providing cities with cutting-edge technology for a smart future.",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "page_name"=>ManageSeo::RADAR,
                "title"=>"Real-Time Speed and Road Condition Monitoring | Radar Sign",
                "description"=>"Radar speed sign solution that keeps drivers informed of speed limits while allowing them to modify their speed based on the state of the road and other factors.",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "page_name"=>ManageSeo::TRANSIT,
                "title"=>"Smart Ticketing, Fleet Management, and PIS",
                "description"=>"We are dedicated to providing reliable and efficient transportation solutions for commuters like smart ticketing, fleet management, passenger information systems.",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "page_name"=>ManageSeo::CONTACT,
                "title"=>"Contact Us Today and Explore the Possibilities",
                "description"=>"Get in touch with us today to discover how our ITS products can benefit your roadways, highways, and tunnels. Contact us for more information and explore the possibilities!",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "page_name"=>ManageSeo::NEWS_EVENT,
                "title"=>"Crucial Details on Safety Display Road Signs: Stay Informed",
                "description"=>"We provide our audience with crucial details on each safety display road sign and keep you informed of the most recent information to help the traffic in your city.",
                "created_at"=>now(),
                "updated_at"=>now(),
            ]
        ];

        foreach ($seo as $data) {
            ManageSeo::create($data);
        }
    }
}
