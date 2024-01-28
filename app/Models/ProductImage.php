<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    const COLOR = [
        'amber',
        'white',
        'green',
        'red',
    ];

    protected $guarded = ['id'];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
