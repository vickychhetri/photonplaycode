<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Setting::insert([
             "type"=>1,
             "title"=>"Photon Play System",
             "description"=>"Photonplay as an OEM is involved in the Design, Development, and Manufacturing of Information Systems for Highways, Mass Transit, system-critical applications.",
             "sales_email"=>"ales@photonplay.co",
             "sales_phone"=>"919780553734",
             "support_email"=>"sales@photonplay.com",
             "support_phone"=>"919780553734",
             "company_location"=>"India",
             "company_name"=>"Photon Play System",
             "company_address"=>"Advant Navis Business Park, B 1010, Noida-Greater Noida Expy, Sector 142, Noida, Uttar Pradesh 201305, India",
             "company_phone"=>"919780553734",
             "company_email"=>"info@photonplay.com",
             "gst"=>18,
             "shipping_time"=>"50",
             "facebook"=>"https://www.facebook.com/",
             "instagram"=>"https://www.instagram.com/",
             "twitter"=>"https://www.twitter.com/",
             "linkedin"=>"https://www.linkden.com/",
             "shipping_days"=>"7-10 working days",
         ]);
    }
}
