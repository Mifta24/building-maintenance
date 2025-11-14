<?php

namespace App\Services;

// use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Cloudinary\Cloudinary;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Exception;

class CloudinaryService
{
    protected $cloudinary;

    public function __construct()
    {
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('cloudinary.cloud_name'),
                'api_key' => config('cloudinary.api_key'),
                'api_secret' => config('cloudinary.api_secret'),
            ],
        ]);
    }

    /**
     * Upload image to Cloudinary
     */
    public function uploadImage(UploadedFile $file, string $folder = 'building-maintenance')
    {
        try {
            // Upload menggunakan path file
            $result = $this->cloudinary->uploadApi()->upload(
                $file->getRealPath(),
                [
                    'folder' => $folder,
                    'resource_type' => 'image'
                ]
            );

            return [
                'success' => true,
                'secure_url' => $result['secure_url'],
                'public_id' => $result['public_id'],
            ];
        } catch (\Exception $e) {
            Log::error('Cloudinary upload error: ' . $e->getMessage());

            return [
                'success' => false,
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Delete image from Cloudinary
     */
    public function deleteImage(string $publicId)
    {
        try {
            $result = $this->cloudinary->uploadApi()->destroy($publicId);

            return [
                'success' => $result['result'] === 'ok',
                'result' => $result['result'],
            ];
        } catch (\Exception $e) {
            Log::error('Cloudinary delete error: ' . $e->getMessage());

            return [
                'success' => false,
                'error' => $e->getMessage(),
            ];
        }
    }
}
