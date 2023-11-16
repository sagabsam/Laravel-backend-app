<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        $image = $request->image;
        $namaFile = time().'.'.$image->getClientOriginalExtension();
        $path = public_path('upload/images');
        $image->move($path,$namaFile);

        return response([
            'image_path' => '/upload/images/'.$namaFile,
            'base_url' => url('/'),
        ]);
    }
}
