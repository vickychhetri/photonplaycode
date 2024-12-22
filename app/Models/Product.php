<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function specilizations(){
        return $this->hasMany(ProductSpecilization::class);
    }

    public function product_resources(){
        return $this->hasMany(ProductAvailableResource::class);
    }
    public function images(){
        return $this->hasMany(ProductImage::class);
    }
    public function category(){
        return $this->BelongsTo(Category::class);
    }

    public static function getLinkedProducts($productId)
    {
        return self::whereJsonContains('products_linked', (string) $productId)->get();
    }


    public static function getProductSKU($productId,$specilizations_data,$other_data)
    {
        $product = Product::select('code')->find($productId);

        if(!$product) {
            return false;
        }
        $sku = strtoupper($product->code);
        foreach ($specilizations_data as $key=> $value) {
            $specialization = Specilization::select('code')->find($key);
            $specializationOption = SpecializationOption::select('code')->find($value);
            if (!$specialization || !$specializationOption) {
                continue;
            }
            $sku .= '-' . strtoupper($specialization->code) . '-' . strtoupper($specializationOption->code);
        }
        foreach ($other_data as  $key=> $value) {
            $sku .= '-' . strtoupper($key) . '-' . strtoupper($value);
        }
        return $sku;
    }



}
