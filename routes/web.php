<?php

// Web Routes

$router->view('/', 'home', [
    'helpers' => [
        'abort',
        'abort_if',
        'abort_unless',
        'back',
        'base_path',
        'config',
        'config_path',
        'method_field',
        'now',
        'old',
        'public_path',
        'redirect',
        'request',
        'rescue',
        'resource_path',
        'response',
        'route',
        'storage_path',
        'today',
        'url',
        'view',
    ],
])->name('home');
