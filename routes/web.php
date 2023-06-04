<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('/login', 'login');
Route::view('/signup', 'signup');
Route::view('/404', 'errors.notfound');

Route::group(['middleware' => []], function () {
    // Route::get('/appointment/all', [AdminController::class, 'allAppointment']);
    Route::view('/dashboard', 'users.index');
});
