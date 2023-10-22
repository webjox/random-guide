<?php

use App\Http\Controllers\CheckinController;
use App\Http\Controllers\NavigatorController;
use App\Http\Controllers\PlaceListController;
use App\Http\Controllers\RandomPlaceController;
use App\Http\Controllers\SavingPlaceController;
use App\Http\Controllers\SkipPlaceController;
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

// Route::get('/', fn () => Inertia::render('Welcome'))->name('home');

Route::inertia('/', 'Welcome', [
    'user' => auth()->user(),
])->name('home');

Route::get('/favorites/{user}', function () {
    return Inertia::render('Favorites');
});

Route::get('/information/{user}', function () {
    return Inertia::render('Information');
})->name('info');

Route::get('/history', function () {
    return Inertia::render('History');
});

Route::get('/places', [PlaceListController::class, 'placesList'])->name('main');

Route::get('/random', RandomPlaceController::class)->name('random');

Route::post('/navigator', SavingPlaceController::class)->name('save-place');
Route::get('/navigator', NavigatorController::class)->name('navigator');
Route::post('/checkin', CheckinController::class)->name('checkin');
Route::get('/skip', SkipPlaceController::class)->name('skip');

require __DIR__.'/auth.php';
