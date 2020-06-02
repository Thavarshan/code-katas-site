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
    /*
     * Kata Demo and Documentation...
     */
    Route::get('/{kata}', 'KatasController')->name('challenges.show');

    /*
     * Kata Demo Execution Route...
     */
    Route::post('/{kata}/execute', 'KatasCalculationController')->name('challenges.execute');
});

/*
 * Auth Routes...
 */
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
