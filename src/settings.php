<?php
return [
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails'               => true, // set to false in production
        'addContentLengthHeader'            => true, // Allow the web server to send the content-length header

        // View settings
        'view' => [
            'template_path' => __DIR__ . '/../templates/',
            'twig'          => [
                'cache'       => __DIR__ . '/../cache/',
                'debug'       => true,
                'auto_reload' => true,
            ],
        ],

        // Database settings go here

        // Monolog settings
        'logger' => [
            'name'  => 'app',
            'path'  => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
