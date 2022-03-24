<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\BookController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('books')->group(function () {

    Route::get('/', [
        'as' => 'get_booking',
        'uses' => 'api\BookController@get_booking'
    ]);

    Route::get('/:bookId', [BookController::class, 'get_booking_by_id'])->name('get_booking_by_id');

    Route::post('/', 'api\BookController@post_booking')->name('post_booking');
    Route::patch('/:bookId', 'api\BookController@patch_booking')->name('patch_booking');
    Route::put('/:bookId', 'api\BookController@put_booking')->name('put_booking');
    Route::delete('/:bookId', 'api\BookController@delete_booking')->name('delete_booking');
});
