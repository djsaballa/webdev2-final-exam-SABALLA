<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bible-study-request-form', 'App\Http\Controllers\BibleStudyController@index');

Route::post('/bible-study-form-sent', 'App\Http\Controllers\BibleStudyController@sent');

Route::get('/bible-study-requests', 'App\Http\Controllers\BibleStudyController@requests');

Route::get('/thank-you', 'App\Http\Controllers\BibleStudyController@thankyou');

