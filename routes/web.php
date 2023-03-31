<?php

use Src\Route;

Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/offices', [Controller\Offices::class, 'allOffices'])
    ->middleware('auth');
Route::add('GET', '/divisions', [Controller\Divisions::class, 'allDivision'])
    ->middleware('auth');


