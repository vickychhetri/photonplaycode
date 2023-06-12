<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSpcializationOption;
use App\Models\ProductSpecilization;
use App\Models\SpecializationOption;
use App\Models\Specilization;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Specilization::query()->delete();
        SpecializationOption::query()->delete();
        Product::query()->delete();

        $s1=Specilization::create([
            'title'=>'Batteries'
        ]);

        $s2=Specilization::create([
            'title'=>'Cloud-Access'
        ]);
        $s3=Specilization::create([
            'title'=>'Power'
        ]);
        $s4=Specilization::create([
            'title'=>'Accessories'
        ]);

        $sp1=SpecializationOption::create([
            'option'=>'3 Days',
            'specialization_id'=>$s1->id,
        ]);
        $sp2=SpecializationOption::create([
            'option'=>'6 Days',
            'specialization_id'=>$s1->id,
        ]);

        $sp3=SpecializationOption::create([
            'option'=>'No',
            'specialization_id'=>$s2->id,
        ]);
        $sp4=SpecializationOption::create([
            'option'=>'Yes',
            'specialization_id'=>$s2->id,
        ]);
        $sp5=SpecializationOption::create([
            'option'=>'Solar',
            'specialization_id'=>$s3->id,
        ]);
        $sp6=SpecializationOption::create([
            'option'=>'AC',
            'specialization_id'=>$s3->id,
        ]);
        $sp7=SpecializationOption::create([
            'option'=>'Pole Mount',
            'specialization_id'=>$s4->id,
        ]);
        $sp8=SpecializationOption::create([
            'option'=>'Dolly',
            'specialization_id'=>$s4->id,
        ]);

        $product1= Product::create([
            'category_id'=>1,
            'title'=>'iCop1200',
            'price'=>1000,
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'specification'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'feature'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'power_option'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'visibility'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'ideal_for'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'warranty'=>'2 Years'
        ]);

        $product2=Product::create([
            'category_id'=>1,
            'title'=>'iCop1200M',
            'price'=>1000,
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'specification'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'feature'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'power_option'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'visibility'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'ideal_for'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'warranty'=>'2 Years'
        ]);

        $product3=Product::create([
            'category_id'=>1,
            'title'=>'iCop1500',
            'price'=>1000,
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'specification'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'feature'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'power_option'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'visibility'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'ideal_for'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'warranty'=>'2 Years'
        ]);

        $product4=Product::create([
            'category_id'=>1,
            'title'=>'iCop1500M',
            'price'=>1000,
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'specification'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'feature'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'power_option'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'visibility'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'ideal_for'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'warranty'=>'2 Years'
        ]);

        $product5=Product::create([
            'category_id'=>1,
            'title'=>'iCop1800M',
            'price'=>1000,
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'specification'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'feature'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'power_option'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'visibility'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'ideal_for'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            'warranty'=>'2 Years'
        ]);


//        Product 1 More Detail
        $product_sp1=ProductSpecilization::create([
            'product_id'=>$product1->id,
            'specialization_id'=>$s1->id
        ]);
        $product_sp2=ProductSpecilization::create([
            'product_id'=>$product1->id,
                'specialization_id'=>$s2->id
        ]);
        $product_sp3=ProductSpecilization::create([
            'product_id'=>$product1->id,
                'specialization_id'=>$s3->id
        ]);
        $product_sp4=ProductSpecilization::create([
            'product_id'=>$product1->id,
                'specialization_id'=>$s4->id
        ]);

        ProductSpcializationOption::create([
                'specialization_option_id'=>$sp1->id,
                'specialization_price'=>0,
                'product_specilizations_id'=>$product_sp1->id,
                'product_id'=>$product1->id
        ]);
        ProductSpcializationOption::create([
            'specialization_option_id'=>$sp2->id,
            'specialization_price'=>50,
            'product_specilizations_id'=>$product_sp1->id,
            'product_id'=>$product1->id
        ]);

        ProductSpcializationOption::create([
            'specialization_option_id'=>$sp3->id,
            'specialization_price'=>0,
            'product_specilizations_id'=>$product_sp2->id,
            'product_id'=>$product1->id
        ]);

        ProductSpcializationOption::create([
            'specialization_option_id'=>$sp4->id,
            'specialization_price'=>80,
            'product_specilizations_id'=>$product_sp2->id,
            'product_id'=>$product1->id
        ]);
        ProductSpcializationOption::create([
            'specialization_option_id'=>$sp5->id,
            'specialization_price'=>0,
            'product_specilizations_id'=>$product_sp3->id,
            'product_id'=>$product1->id
        ]);

        ProductSpcializationOption::create([
            'specialization_option_id'=>$sp6->id,
            'specialization_price'=>50,
            'product_specilizations_id'=>$product_sp3->id,
            'product_id'=>$product1->id
        ]);

        ProductSpcializationOption::create([
            'specialization_option_id'=>$sp7->id,
            'specialization_price'=>0,
            'product_specilizations_id'=>$product_sp4->id,
            'product_id'=>$product1->id
        ]);

        ProductSpcializationOption::create([
            'specialization_option_id'=>$sp8->id,
            'specialization_price'=>30,
            'product_specilizations_id'=>$product_sp4->id,
            'product_id'=>$product1->id
        ]);
        // End of Product 1 More Detail


    }
}
