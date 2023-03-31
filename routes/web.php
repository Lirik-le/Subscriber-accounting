<?php

use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'index']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

Route::add('GET', '/offices', [Controller\Offices::class, 'allOffices'])
    ->middleware('auth');
Route::add('GET', '/divisions', [Controller\Divisions::class, 'allDivision'])
    ->middleware('auth');
Route::add('GET', '/rooms', [Controller\Rooms::class, 'allRooms'])
    ->middleware('auth');
Route::add('GET', '/subscribers', [Controller\Subscribers::class, 'allSubscribers'])
    ->middleware('auth');
Route::add('GET', '/numbers', [Controller\Numbers::class, 'allNumbers'])
    ->middleware('auth');
Route::add('GET', '/staff', [Controller\Staff::class, 'allStaff'])
    ->middleware('auth');
Route::add('GET', '/types', [Controller\Types::class, 'allTypes'])
    ->middleware('auth');