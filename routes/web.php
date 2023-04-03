<?php

use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'index']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout'])
    ->middleware('auth');

Route::add('GET', '/offices', [Controller\Offices::class, 'allOffices'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/offices/add', [Controller\Offices::class, 'addOffice'])
    ->middleware('auth');

Route::add('GET', '/divisions', [Controller\Divisions::class, 'allDivisions'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/divisions/add', [Controller\Divisions::class, 'addDivision'])
    ->middleware('auth');

Route::add('GET', '/rooms', [Controller\Rooms::class, 'allRooms'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/rooms/add', [Controller\Rooms::class, 'addRoom'])
    ->middleware('auth');

Route::add('GET', '/subscribers', [Controller\Subscribers::class, 'allSubscribers'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/subscribers/add', [Controller\Subscribers::class, 'addSubscriber'])
    ->middleware('auth');

Route::add('GET', '/numbers', [Controller\Numbers::class, 'allNumbers'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/numbers/add', [Controller\Numbers::class, 'addNumber'])
    ->middleware('auth');

Route::add('GET', '/staff', [Controller\Staff::class, 'allStaff'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])
    ->middleware('auth');

Route::add('GET', '/types', [Controller\Types::class, 'allTypes'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/types/add', [Controller\Types::class, 'addType'])
    ->middleware('auth');