<?php

namespace Database\Seeders;

use App\Models\ProductAvailableResource;
use Illuminate\Database\Seeder;

class ProductAvailableResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productIds = [1, 3, 4, 5];
        $samplePdfs = [
            ['filename' => 'sample1.pdf', 'order' => 1],
            ['filename' => 'sample2.pdf', 'order' => 2],
            ['filename' => 'sample3.pdf', 'order' => 3],
        ];

        foreach ($productIds as $productId) {
            foreach ($samplePdfs as $pdf) {
                ProductAvailableResource::create([
                    'product_id' => $productId,
                    'filename' => $pdf['filename'],
                    'folder' => 'pdf',
                    'order' => $pdf['order'],
                    'type' => 'pdf',
                    'status' => 1,
                ]);
            }
        }
    }
}
