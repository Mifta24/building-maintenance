<?php

namespace App\Models;

use App\Traits\CloudinaryImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Service extends Model
{
    use CloudinaryImageUpload, HasFactory, Notifiable;

    protected $fillable = [
        'image_url',
        'image_public_id',
        'name',
        'description',
    ];

    /**
     * Boot the model
     */
    protected static function boot()
    {
        parent::boot();

        // Delete image from Cloudinary when service is deleted
        static::deleting(function ($service) {
            if ($service->image) {
                $service->deleteImageFromCloudinary($service->image);
            }
        });
    }

    /**
     * Get the optimized image URL
     *
     * @return string
     */
    public function getOptimizedImage(array $transformations = [])
    {
        if (! $this->image) {
            return null;
        }

        return $this->getOptimizedImageUrl($this->image, $transformations);
    }

    /**
     * Get the thumbnail image URL
     *
     * @return string
     */
    public function getThumbnailAttribute()
    {
        return $this->getOptimizedImage([
            'width' => 300,
            'height' => 200,
            'crop' => 'fill',
        ]);
    }

    /**
     * Get the medium image URL
     *
     * @return string
     */
    public function getMediumImageAttribute()
    {
        return $this->getOptimizedImage([
            'width' => 600,
            'height' => 400,
            'crop' => 'fill',
        ]);
    }
}
