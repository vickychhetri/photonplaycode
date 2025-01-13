<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageSeo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public const HOME='HOME';
    public const COMPANY='COMPANY';
    public const HIGHWAYS='HIGHWAYS';  //1
    public const VMS="VMS";
    public const PVMS='PVMS';
    public const TUNNELS='TUNNELS';  //2
    public const SIGNAGE='SIGNAGE';
    public const SMARTCITY="SMARTCITY"; //3
    public const RADAR="RADAR";
    public const TRANSIT="TRANSIT";    //4
    public const CONTACT="CONTACT";
    public const NEWS_EVENT="NEWS_EVENT";
    public const LED_TICKER_TAPES="LED_TICKER_TAPES";
    public const RADAR_MUNICIPALITIES="RADAR_MUNICIPALITIES";
    public const CAMPUS="CAMPUS";
    public const NEIGHBOURHOOD="NEIGHBOURHOOD";
    public const PARKING_LOT="PARKING_LOT";
    public const SCHOOL_ZONE="SCHOOL_ZONE";
    public const LOGIN="LOGIN";
    public const REGISTER="REGISTER";
    public const SHOPPING_BAG="SHOPPING_BAG";


}
