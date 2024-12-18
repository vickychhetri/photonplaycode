<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterConfiguration extends Model
{
    use HasFactory;
    protected $table = 'master_configurations';

    protected $fillable = [
        'code',
        'value',
        'status',
    ];

    // Accessor for human-readable status
    public function getStatusTextAttribute()
    {
        return $this->status ? 'Active' : 'Inactive';
    }

    // Scope for active configurations
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
