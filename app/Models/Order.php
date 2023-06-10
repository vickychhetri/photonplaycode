<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function orderedProducts(){
        return $this->hasMany(OrderedProduct::class);
    }

    public function user(){
        return $this->belongsTo(Customer::class, 'user_id', 'id');
    }
    
    
}
