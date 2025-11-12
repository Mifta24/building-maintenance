<?php

namespace App\Models;

use App\Traits\CloudinaryImageUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use CloudinaryImageUpload, HasFactory, Notifiable;

    protected $fillable = [
        'image',
        'image_public_id',
        'headline',
        'lead',
        'body',
    ];

    /**
     * Boot the model
     */
    protected static function boot()
    {
        parent::boot();

        // Delete image from Cloudinary when article is deleted
        static::deleting(function ($article) {
            if ($article->image_public_id) {
                $cloudinary = app(CloudinaryService::class);
                $cloudinary->deleteImage($article->image_public_id);
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
    public function getImageThumbnailAttribute()
    {
        if (!$this->image) {
            return null;
        }

        // Jika menggunakan Cloudinary, bisa generate thumbnail URL
        // Contoh: https://res.cloudinary.com/cloud-name/image/upload/w_200,h_200,c_fill/public_id
        return $this->image;
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
