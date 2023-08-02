<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class CommonController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('photo');
        $filename='';
//        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
//        $file->storeAs('public/photos', $filename);
        if (isset($request->photo)) {
            $originalName = $request->file('photo')->getClientOriginalName();
            $extension = $request->file('photo')->getClientOriginalExtension();
            $number = 0;
            $imageName = $originalName;

            while (Storage::disk('public')->exists('public/photos/' . $imageName)) {
                $number++;
                $imageName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . $number . '.' . $extension;
            }

            $request->file('image')->storeAs('public/photos', strtolower($imageName), 'public');
            $filename=$imageName;
        }

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
