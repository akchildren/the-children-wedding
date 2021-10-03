<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlaylistController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register' => false, 'password/reset' => false, 'password/email' => false]);

Route::get('/', function () {
    return view('login');
});

Route::middleware(['web', 'custom_auth'])->group(function(){
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::post('/contact', ContactController::class)->name('contact');
    Route::post('/playlist', PlaylistController::class)->name('playlist');
});
