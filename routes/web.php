<?php

use App\Http\Controllers\AuthController;
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

Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup');
Route::view('/404', 'errors.notfound');

Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/create-account', [AuthController::class, 'createAccount'])->name('create-account');
Route::post('/access-account', [AuthController::class, 'userLogin'])->name('access-account');


Route::group(['middleware' => ['auth']], function () {
    // Route::get('/appointment/all', [AdminController::class, 'allAppointment']);
    Route::view('/dashboard', 'users.index');
    Route::view('/deposit', 'users.deposit');
    Route::view('/transfer', 'users.transfer');
});



Route::group(['prefix' => 'admin/', 'as' => 'admin.' ,'middleware' => ['auth']], function () {
    // Route::get('/appointment/all', [AdminController::class, 'allAppointment']);
    Route::view('/dashboard', 'admin.index');
    Route::view('/manage_user', 'admin.all_users');
});
