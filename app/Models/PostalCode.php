<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
    use HasFactory;
    protected $fillable = [
        'country', 'postal_code', 'city', 'province', 'province_abbr', 'latitude', 'longitude', 'time_zone'
    ];
    protected $appends = ['country_name'];

    public function getCountryNameAttribute()
    {
        $countryMapping = [
            'CA' => 'Canada',
            'US' => 'United States',
        ];

        return $countryMapping[$this->country] ?? $this->country;
    }
}
