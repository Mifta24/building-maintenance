<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Cloudinary Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your Cloudinary settings. Cloudinary is a cloud
    | service that provides an end-to-end image and video management solution
    | including uploads, storage, manipulations, optimizations and delivery.
    |
    */

    'cloud_url' => env('CLOUDINARY_URL'),

    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),

    'api_key' => env('CLOUDINARY_API_KEY'),

    'api_secret' => env('CLOUDINARY_API_SECRET'),

    'secure' => env('CLOUDINARY_SECURE', true),

    'api_proxy' => env('CLOUDINARY_API_PROXY'),

    'upload_preset' => env('CLOUDINARY_UPLOAD_PRESET'),

    'notification_url' => env('CLOUDINARY_NOTIFICATION_URL'),

    'analytics' => env('CLOUDINARY_ANALYTICS', false),

    'auto_tagging' => env('CLOUDINARY_AUTO_TAGGING', 0),

    'auto_foldering' => env('CLOUDINARY_AUTO_FOLDERING', false),

    'folder' => env('CLOUDINARY_FOLDER'),

    'folders' => [
        'articles' => env('CLOUDINARY_ARTICLES_FOLDER', 'articles'),
        'services' => env('CLOUDINARY_SERVICES_FOLDER', 'services'),
        'partners' => env('CLOUDINARY_PARTNERS_FOLDER', 'partners'),
    ],
];
