<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecilization extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function specilization(){
        return $this->belongsTo(Specilization::class,'specialization_id');
    }

    public function options(){
        return $this->hasMany(ProductSpcializationOption::class, 'product_specilizations_id', 'id');
    }

}
