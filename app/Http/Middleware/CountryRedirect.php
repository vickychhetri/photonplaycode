<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//use Closure;
use GeoIp2\Database\Reader;
use App\Models\Currency;
use GeoIp2\Exception\AddressNotFoundException;
use Illuminate\Support\Facades\Session;

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
        $reader = new Reader(storage_path('app/GeoLite2-Country.mmdb')); // Path to the GeoIP database
        $visitorIP = $request->ip();
        // Handle local IP addresses separately
        if ($visitorIP === '127.0.0.1' || $visitorIP === '::1') {
            $countryCode = 'IN'; // Assuming 'IN' for local testing, change as needed
        } else {
            try {
                $record = $reader->country($visitorIP);
                $countryCode = $record->country->isoCode;
            } catch (AddressNotFoundException $e) {
                // Handle cases where the IP address is not found in the GeoIP database
                $countryCode = 'UNKNOWN'; // Default fallback
            }
        }
        if (!Session::has('exchange_rate')) {
            $currency_handler = Currency::where('country_code', $countryCode)->first();
            if ($currency_handler) {
                Session::put('currency_icon', $currency_handler->currency_code);
                Session::put('exchange_rate', $currency_handler->exchange_rate);
            }
        }

        if ($countryCode === 'IN') {
          return redirect('https://www.photonplayinc.com/traffic-signs/radar-speed-signs/');
        }
        return $next($request);
    }
}
