<?php
return [
    'auth' => \Src\Auth\Auth::class,
    'identity' => \Model\Employee::class,
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
        'admin' => \Middlewares\AdminMiddleware::class,
    ],
    'validators' => [
        'required' => \Validators\RequireValidator::class,
        'unique' => \Validators\UniqueValidator::class,
        'chars' => \Validators\СharacterValidator::class,
        'minLen' => \Validators\MinLengthValidator::class,
        'image' => \Validators\ImageValidator::class,
        'number' => \Validators\NumberLengthValidator::class,
        'onlyNum' => \Validators\OnlyNumbersValidator::class,
    ],
    'routeAppMiddleware' => [
        'csrf' => \Middlewares\CSRFMiddleware::class,
        'trim' => \Middlewares\TrimMiddleware::class,
        'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
    ],
];
