<?php

namespace App\Services;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\UploadedFile;

class CloudinaryService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function uploadImage(UploadedFile $file, string $folder): string
    {
        return Cloudinary::upload($file->getRealPath(), [
            'folder' => $folder,
            'resource_type' => 'image'
        ])->getSecurePath();
    }
}
