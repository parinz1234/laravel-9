<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RenderingController;
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

Route::prefix('rendering')->group(function () {
    Route::get('/html', [
        'as' => 'get_html',
        'uses' => 'RenderingController@get_html'
    ]);

    Route::get('/browsershot', [
        'as' => 'get_browsershot',
        'uses' => 'RenderingController@get_browsershot'
    ]);
});


Route::get('/{any?}', function () {
    return view('welcome');
});
