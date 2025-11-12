<?php

namespace App\Services;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Exception;

class CloudinaryService
{
    /**
     * Upload an image to Cloudinary
     *
     * @param UploadedFile $file
     * @param string $folder
     * @return array
     */
    public function uploadImage(UploadedFile $file, string $folder = 'ebila-hall/rooms'): array
    {
        try {
            // Validasi file
            if (!$file->isValid()) {
                return [
                    'success' => false,
                    'error' => 'Invalid file upload'
                ];
            }

            // Validasi mime type
            $allowedMimes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp'];
            if (!in_array($file->getMimeType(), $allowedMimes)) {
                return [
                    'success' => false,
                    'error' => 'Invalid file type. Only images are allowed.'
                ];
            }

            // Upload ke Cloudinary menggunakan Facade
            $uploadedFile = $file->storeOnCloudinary($folder);

            return [
                'success' => true,
                'secure_url' => $uploadedFile->getSecurePath(),
                'public_id' => $uploadedFile->getPublicId(),
                'url' => $uploadedFile->getPath(),
                'file_name' => $uploadedFile->getFileName(),
                'extension' => $uploadedFile->getExtension(),
                'size' => $uploadedFile->getSize(),
            ];
        } catch (Exception $e) {
            Log::error('Cloudinary upload failed: ' . $e->getMessage(), [
                'file_name' => $file->getClientOriginalName(),
                'file_size' => $file->getSize(),
            ]);

            return [
                'success' => false,
                'error' => 'Failed to upload image: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Upload dengan options tambahan
     *
     * @param UploadedFile $file
     * @param string $folder
     * @param array $options
     * @return array
     */
    public function uploadImageWithOptions(UploadedFile $file, string $folder = 'ebila-hall/rooms', array $options = []): array
    {
        try {
            if (!$file->isValid()) {
                return [
                    'success' => false,
                    'error' => 'Invalid file upload'
                ];
            }

            // Merge default options
            $defaultOptions = [
                'folder' => $folder,
                'resource_type' => 'image',
                'quality' => 'auto',
                'fetch_format' => 'auto'
            ];

            $options = array_merge($defaultOptions, $options);

            // Upload menggunakan Cloudinary Facade
            $result = Cloudinary::upload($file->getRealPath(), $options);

            return [
                'success' => true,
                'secure_url' => $result->getSecurePath(),
                'public_id' => $result->getPublicId(),
                'url' => $result->getPath(),
                'width' => $result->getWidth(),
                'height' => $result->getHeight(),
            ];
        } catch (Exception $e) {
            Log::error('Cloudinary upload failed: ' . $e->getMessage());

            return [
                'success' => false,
                'error' => 'Failed to upload image: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Delete an image from Cloudinary
     *
     * @param string $publicId
     * @return array
     */
    public function deleteImage(string $publicId): array
    {
        try {
            $result = Cloudinary::destroy($publicId);

            return [
                'success' => true,
                'message' => 'Image deleted successfully'
            ];
        } catch (Exception $e) {
            Log::error('Cloudinary delete failed: ' . $e->getMessage(), [
                'public_id' => $publicId
            ]);

            return [
                'success' => false,
                'error' => 'Failed to delete image: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Get Cloudinary URL for public ID
     *
     * @param string $publicId
     * @param array $transformation
     * @return string
     */
    public function getUrl(string $publicId, array $transformation = []): string
    {
        return Cloudinary::getUrl($publicId, $transformation);
    }

    /**
     * Upload multiple images
     *
     * @param array $files
     * @param string $folder
     * @return array
     */
    public function uploadMultipleImages(array $files, string $folder = 'ebila-hall/rooms'): array
    {
        $results = [];

        foreach ($files as $file) {
            if ($file instanceof UploadedFile) {
                $results[] = $this->uploadImage($file, $folder);
            }
        }

        return $results;
    }
}
