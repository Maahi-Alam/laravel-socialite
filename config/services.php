<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'github' => [
        'client_id' => 'Iv1.a3cb5fc08ad9437c',
        'client_secret' => 'c87703f87a6dcda89e2ea7ab54de0a7f39fc20bd',
        'redirect' => 'http://localhost/laravel-socialite/public/login/github/callback'
    ],

    'google' => [
        'client_id' => '257002395849-hqbrgcngod7iprnb07qdcn4cdv2vab5i.apps.googleusercontent.com',
        'client_secret' => 'SuERtUzVaBLvpmwjEz3Eex1e',
        'redirect' => 'http://localhost/laravel-socialite/public/login/google/callback'
    ],
];
