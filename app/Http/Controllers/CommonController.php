<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CommonController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('photo');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/photos', $filename);
        return response()->json([
            'url' => asset('storage/photos/' . $filename)
        ]);
    }

    public function optimize(){
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:cache');

        echo 'optimized';
    }

}
