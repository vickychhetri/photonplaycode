<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealerSubscription extends Model
{
    use HasFactory;
    protected  $table="dealer_subscriptions";
    protected $fillable = [
        'email',
        'ip_address',
        'records_status',
    ];
}
