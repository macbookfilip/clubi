<?php

// key-value pairs defining all the constants
return [
    'name' => 'clubi',

    'profile_picture' => [
        'min_width' => 250,
        'min_height' => 250,
        'max_width' => 5000,
        'max_height' => 5000,
        'fit_width' => 1000,
        'fit_height' => 1000,
    ],

    'banner_picture' => [
        'min_width' => 250,
        'min_height' => 250,
        'max_width' => 5000,
        'max_height' => 5000,
        'fit_width' => 1920,
        'fit_height' => 1080,
    ],

    'post_picture' => [
        'min_width' => 250,
        'min_height' => 250,
        'max_width' => 5000,
        'max_height' => 5000,
        'fit_width' => 1920,
        'fit_height' => 1080,
    ],

    'comment_picture' => [
        'min_width' => 250,
        'min_height' => 250,
        'max_width' => 5000,
        'max_height' => 5000,
        'fit_width' => 1920,
        'fit_height' => 1080,
    ],

    'comments_per_page' => env('MIX_COMMENTS_PER_PAGE'),
    'posts_per_page' => env('MIX_POSTS_PER_PAGE'),
    'default_profile_picture_path' => env('MIX_DEFAULT_PROFILE_PICTURE_PATH'),
    'default_banner_picture_path' => env('MIX_DEFAULT_BANNER_PICTURE_PATH'),

    'max_post_length' => 5000,
    'max_comment_length' => 1000,

    'max_invitations_per_group' => env('MIX_MAX_INVITATIONS_PER_GROUP'),

    'min_username_length' => env('MIX_MIN_USERNAME_LENGTH'),

    'read_more_char_cutoff' => env('MIX_READ_MORE_CHAR_CUTOFF'),

    'throttle' => [
        'global_per_minute' => 1000,
        'uploads_per_minute' => 20,
    ],

    'notifications_per_page' => env('MIX_NOTIFICATIONS_PER_PAGE'),

    'max_notification_message_length' => 20,
];
