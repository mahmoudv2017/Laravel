<?php

use App\Http\Controllers\listingController;
use Illuminate\Support\Facades\Route;
use App\Models\listings;

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

Route::post('/register', function () {
    return response('reponse from server');
});

Route::get('/data', [listingController::class , 'index'] );

Route::get('/data/{listing}', [listingController::class , 'show']);

