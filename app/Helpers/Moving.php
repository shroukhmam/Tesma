<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;


class Moving
{
    
    public static function upload($request, $folder, $image)
    {
        if ($request->hasFile($image)) {
            return Storage::disk('public')->put($folder, $request->File($image));
        }

    }

    public static function deleteImage($filename)
    {
        if (!is_null($filename) && Storage::disk('public')->exists($filename)) {
            return Storage::disk('public')->delete($filename);
        }
    }
}
