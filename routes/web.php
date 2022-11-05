<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return Inertia::render('Home');
    })->name('dashboard');

    Route::get('/sponsors', function() {
        return Inertia::render('Sponsors');
    })->name('sponsors');

    Route::get('/add-sponsor', function() {
        return Inertia::render('AddSponsor');
    })->name('add-sponsor');

    Route::get('/active-members', function() {
        return Inertia::render('ActiveMembers');
    })->name('active-members');
});




require __DIR__.'/auth.php';
