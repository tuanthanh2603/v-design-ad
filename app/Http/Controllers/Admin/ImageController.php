<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function normalizeFileName($fileName){
        $fileName = preg_replace("/[^a-zA-Z0-9\.\-\s]/", "", $fileName);
        $fileName = str_replace(' ', '_', $fileName);
        $fileName = str_replace('-', '_', $fileName);
        return $fileName;
    }
    
    public function upload(Request $request) {
        $image = $request->file('image');
        return self::processUpload($image);
    }

    public function processUpload($image){
        if (!$image) {
            return response()->json(['error' => 'No image uploaded.']);
        }

        if (!$image->isValid()) {
            return response()->json(['error' => 'Invalid image.']);
        }

        $prefix = 'uploads';
        $fileName = self::normalizeFileName($image->getClientOriginalName());
        $exists = Storage::exists("public/{$prefix}/{$fileName}");
        $extension = $image->getClientOriginalExtension();

        if ($exists) {
            $fileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . uniqid() . '.' . $extension;
        }

        $path = $image->storeAs("public/{$prefix}", $fileName);

        return response()->json(['path' => "/storage/{$prefix}/{$fileName}"]);
    }

    public function multiUpload(Request $request)
    {
        $paths = [];

        if ($request->hasFile('albums')) {
            foreach ($request->file('albums') as $album) {
                $path = $this->processUpload($album);
                $paths[] = json_decode($path->getContent(), true)['path'];
            }
        }

        return response()->json(['paths' => $paths]);
    }
}