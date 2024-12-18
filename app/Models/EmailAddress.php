<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailAddress extends Model
{
    use HasFactory;
    protected $table = 'email_addresses';

    // Specify the columns that are mass assignable
    protected $fillable = [
        'email',
        'status',
        'code',
    ];
}
