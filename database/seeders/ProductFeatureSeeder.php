<?php

namespace Database\Seeders;

use App\Models\ProductFeature;
use Illuminate\Database\Seeder;

class ProductFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productIds = [1, 3, 4, 5];

        $features = [
            [
                'icon' => 'image/cloud.png',
                'order' => 1,
                'heading_text' => '10 Years Free Cloud connectivity',
            ],
            [
                'icon' => 'image/lock_image.png',
                'order' => 2,
                'heading_text' => 'Lockable Universal mounting',
            ],
            [
                'icon' => 'image/warning.png',
                'order' => 3,
                'heading_text' => 'Tornado Warning',
            ],
            [
                'icon' => 'image/weather_image.png',
                'order' => 4,
                'heading_text' => 'Snow Warning & Rain Alerts',
            ],
        ];

        foreach ($productIds as $productId) {
            foreach ($features as $feature) {
                ProductFeature::create([
                    'product_id' => $productId,
                    'icon' => $feature['icon'],
                    'order' => $feature['order'],
                    'heading_text' => $feature['heading_text'],
                    'status' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
