<?php

return [
    'paths' => ['api/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'http://localhost:3000',       // Next.js dev server
        'https://www.saktiasia.web.id', // domain production
        'https://saktiasia.web.id',     // tanpa www, jaga-jaga
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,
];