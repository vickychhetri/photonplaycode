<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpcializationOption extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function specializationoptions(){
        return $this->belongsTo(SpecializationOption::class,'specialization_option_id');
    }

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function product_specilization(){
        return $this->belongsTo(ProductSpecilization::class,'product_specilizations_id');
    }

}
