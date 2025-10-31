<?php

namespace App\Traits;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

trait CloudinaryImageUpload
{
    /**
     * Upload image to Cloudinary
     *
     * @return string|null
     */
    public function uploadImageToCloudinary(UploadedFile $file, string $folder)
    {
        try {
            $fileName = time().'_'.Str::random(10).'.'.$file->getClientOriginalExtension();

            $uploadedFile = Cloudinary::upload(
                $file->getRealPath(),
                [
                    'folder' => $folder,
                    'public_id' => $fileName,
                    'resource_type' => 'image',
                    'quality' => 'auto',
                    'fetch_format' => 'auto',
                ]
            );

            return $uploadedFile->getSecurePath();
        } catch (\Exception $e) {
            Log::error('Cloudinary upload failed: '.$e->getMessage());

            return null;
        }
    }

    /**
     * Delete image from Cloudinary
     *
     * @return bool
     */
    public function deleteImageFromCloudinary(string $imageUrl)
    {
        try {
            // Extract public_id from Cloudinary URL
            $publicId = $this->getPublicIdFromUrl($imageUrl);

            if ($publicId) {
                Cloudinary::destroy($publicId);

                return true;
            }

            return false;
        } catch (\Exception $e) {
            Log::error('Cloudinary delete failed: '.$e->getMessage());

            return false;
        }
    }

    /**
     * Extract public_id from Cloudinary URL
     *
     * @return string|null
     */
    private function getPublicIdFromUrl(string $url)
    {
        try {
            // Parse URL to get path
            $parsedUrl = parse_url($url);
            $path = $parsedUrl['path'] ?? '';

            // Remove /image/upload/ and file extension
            $pathParts = explode('/', $path);
            $uploadIndex = array_search('upload', $pathParts);

            if ($uploadIndex !== false && isset($pathParts[$uploadIndex + 1])) {
                $publicIdWithExtension = implode('/', array_slice($pathParts, $uploadIndex + 1));
                $publicId = preg_replace('/\.[^.]+$/', '', $publicIdWithExtension);

                return $publicId;
            }

            return null;
        } catch (\Exception $e) {
            Log::error('Failed to extract public ID: '.$e->getMessage());

            return null;
        }
    }

    /**
     * Get optimized image URL with transformations
     *
     * @return string
     */
    public function getOptimizedImageUrl(string $imageUrl, array $transformations = [])
    {
        try {
            $defaultTransformations = [
                'quality' => 'auto',
                'fetch_format' => 'auto',
            ];

            $transformations = array_merge($defaultTransformations, $transformations);

            // Parse URL and add transformations
            $parsedUrl = parse_url($imageUrl);
            $path = $parsedUrl['path'] ?? '';
            $pathParts = explode('/', $path);
            $uploadIndex = array_search('upload', $pathParts);

            if ($uploadIndex !== false) {
                // Build transformation string
                $transformationString = [];
                foreach ($transformations as $key => $value) {
                    $transformationString[] = $key.'_'.$value;
                }
                $transformationString = implode(',', $transformationString);

                // Insert transformation after upload
                array_splice($pathParts, $uploadIndex + 1, 0, $transformationString);
                $newPath = implode('/', $pathParts);

                return $parsedUrl['scheme'].'://'.$parsedUrl['host'].$newPath;
            }

            return $imageUrl;
        } catch (\Exception $e) {
            Log::error('Failed to optimize image URL: '.$e->getMessage());

            return $imageUrl;
        }
    }
}
