<?php
return [
    'auth' => \Src\Auth\Auth::class,
    'identity' => \Model\Employee::class,
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
    ]
];
