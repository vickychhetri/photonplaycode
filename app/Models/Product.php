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

}
