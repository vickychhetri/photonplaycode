<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait UploadImageNameTrait
{

    /**
     * @param $img
     * @return mixed|string
     */
    public function storeImageWithName($img)
    {
        $image_path='';
        if (isset($img)) {
            $originalName = $img->getClientOriginalName();
            $extension = $img->getClientOriginalExtension();
            $number = 0;
            $imageName = $originalName;

            while (Storage::disk('public')->exists('image/' . $imageName)) {
                $number++;
                $imageName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . $number . '.' . $extension;
            }

            $image_path = $img->storeAs('image', strtolower($imageName), 'public');
        }
        return $image_path;
    }


    public function deleteImageWithName($imageName)
    {
        $image_path = 'image/' . strtolower($imageName); // Image path in the 'public' disk

        // Check if the image exists in the storage and delete it
        if (Storage::disk('public')->exists($image_path)) {
            Storage::disk('public')->delete($image_path);
            return true; // Successfully deleted
        }

        return false; // Image not found
    }





}
