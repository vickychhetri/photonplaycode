<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const VMS = 1;
    const VSLS = 2;

    const PVMS = 3;
    const SIGNAGES = 7;
    const PIDS = 8;
    const LCS = 10;


    public function specs(){
        return $this->hasMany(PageSpec::class);
    }

    public function images(){
        return $this->hasMany(PageImage::class)->take(3);
    }

    public function features(){
        return $this->hasMany(PageFeature::class);
    }

    public function pageType(){
        return $this->belongsTo(PageType::class);
    }
    public function galleries(){
        return $this->hasMany(PageGallery::class);
    }

}
