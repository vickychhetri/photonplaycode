<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Session;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function specilizations(){
        return $this->hasMany(ProductSpecilization::class);
    }

    public function product_resources(){
        return $this->hasMany(ProductAvailableResource::class)->where('status', 1)->orderBy('order', 'ASC');
    }
    public function images(){
        return $this->hasMany(ProductImage::class);
    }
    public function product_features(){
        return $this->hasMany(ProductFeature::class);
    }
    public function category(){
        return $this->BelongsTo(Category::class);
    }

    public static function getLinkedProducts(array $productIds)
    {
        // Initialize excluded product IDs
        $excludedProductIds = [];
        // Determine if the user is a guest or logged in
        if (!Session::get('user')) {
            // Guest user: Get cart items by session ID
            $cartTable = Cart::select('quantity', 'product_id')
                ->where('session_id', Session::getId())
                ->get();
        } else {
            // Logged-in user: Get cart items by user ID
            $cartTable = Cart::select('quantity', 'product_id')
                ->where('user_id', Session::get('user')->id)
                ->get();
        }

        // Populate excluded product IDs and calculate total count
        foreach ($cartTable as $cartItem) {
            $excludedProductIds[] = $cartItem->product_id;
        }


        return self::where(function ($query) use ($productIds) {
            foreach ($productIds as $productId) {
                $query->orWhereJsonContains('products_linked', (string) $productId);
            }
        })->whereNotIn('id', $excludedProductIds) // Exclude products in the cart
        ->get();
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
