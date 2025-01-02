<?php

namespace App\Http\Controllers;

use App\Models\PostalCode;
use Illuminate\Http\Request;

class PostalCodesController extends Controller
{
    public function index(Request $request)
    {
        // Start the query for postal codes
        $query = PostalCode::query();

        // Clean postal code input by removing spaces
        if ($request->has('postal_code') && !empty($request->postal_code)) {
            // Remove spaces from the postal code
            $postalCode = str_replace(' ', '', $request->postal_code);

            // Use 'like' query for postal code without spaces
            $query->whereRaw("REPLACE(postal_code, ' ', '') LIKE ?", ["$postalCode%"]);
        }

        // Then apply other filters if provided
        if ($request->has('country') && !empty($request->country)) {
            $query->where('country', 'like', '%' . $request->country . '%');
        }
        if ($request->has('state') && !empty($request->state)) {
            $query->where('province', 'like', '%' . $request->state . '%');
        }
        if ($request->has('city') && !empty($request->city)) {
            $query->where('city', 'like', '%' . $request->city . '%');
        }
        if ($request->has('time_zone') && !empty($request->time_zone)) {
            $query->where('time_zone', 'like', '%' . $request->time_zone . '%');
        }

        // Execute the query and get results
        $locations = $query->get();

        // Return the matching locations as a JSON response
        return response()->json([
            'status' => 'success',
            'data' => $locations
        ]);
    }

}
