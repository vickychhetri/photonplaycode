<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//use Closure;
use GeoIp2\Database\Reader;
class CountryRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // $reader = new Reader(storage_path('app/GeoLite2-Country.mmdb')); // Path to the GeoIP database

        // $visitorIP = $request->ip();

        // $record = $reader->country($visitorIP);
        // $countryCode = $record->country->isoCode;

        // if ($countryCode === 'IN') {
        //     return redirect('https://www.photonplayinc.com/traffic-signs/radar-speed-signs/');
        // }

        return $next($request);
    }
}
