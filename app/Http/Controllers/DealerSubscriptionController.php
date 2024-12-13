<?php

namespace App\Http\Controllers;

use App\Models\DealerSubscription;
use Illuminate\Http\Request;

class DealerSubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:dealer_subscriptions,email',
        ]);

        $ipAddress = $request->ip();

        // Store the subscription with the email and IP address
        DealerSubscription::create([
            'email' => $request->email,
            'ip_address' => $ipAddress,  // Capture IP address server-side
            'records_status' => 1, // Active by default
        ]);
        return redirect()->route('customer.radar.speed.signs')->with('success', 'Dealers/Parterns email added successfully, we will connect you soon.')->withFragment('dealer-subscribe');;


    }
}
