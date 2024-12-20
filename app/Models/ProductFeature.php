<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'icon',
        'heading_text',
        'status',
        'order'
    ];

    /**
     * Get the product associated with the feature.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
