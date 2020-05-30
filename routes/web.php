<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sheets\Sheets as Document;

/*
 * Landinf Page...
 */
Route::get('/', function (Document $documents) {
    return view('welcome', ['katas' => $documents->all()]);
})->name('welcome');

/*
 * Katas Routes...
 */
Route::group([
    'prefix' => 'challenges',
], function (): void {
    Route::get('/{kata}', 'KatasController')->name('challenges.show');
    Route::post('/prime-factors', 'KatasCalculationController@primeFactors')->name('challenges.prime-factors.calculate');
});

/*
 * Auth Routes...
 */
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
