<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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
Route::get('/get_price', [TransactionController::class, 'fetchCoinPriceApi']);
Route::view('/prime/info', 'info' );
Route::view('/name', 'main' );


Route::group(['middleware' => ['auth']], function () {
    // Route::get('/appointment/all', [AdminController::class, 'allAppointment']);
    Route::get('/dashboard', [UserController::class, 'indexU']);
    Route::get('/deposit', [UserController::class, 'depositIndex']);


    Route::get('/wallet', [UserController::class, 'walletSettingIndex']);


    Route::view('/transfer', 'users.transfer');
    Route::view('/convert', 'users.convert'); //

    Route::post('/make_deposit', [TransactionController::class, 'makeDeposit'])->name('make_deposit');    
});



Route::group(['prefix' => 'admin/', 'as' => 'admin.' ,'middleware' => ['auth']], function () {
    // Route::get('/appointment/all', [AdminController::class, 'allAppointment']);  set_price
    Route::view('/dashboard', 'admin.index');
    Route::view('/deposit/pending', 'admin.all_users');
    Route::view('/manage_deposit', 'admin.manage_deposit');

    Route::get('/set_price', [SettingsController::class, 'setPriceIndex']);
    Route::post('/set_price', [SettingsController::class, 'updateCoinPrice']);


    Route::group(['prefix' => 'deposit/' ], function () {
        Route::get('/pending', [AdminController::class, 'managePendingDepositIndex']);
        Route::post('/reject_deposit', [AdminController::class, 'rejectDeposit']);
        Route::post('/approve_deposit', [AdminController::class, 'approveDeposit']);
        Route::get('/history', [AdminController::class, 'depositHistoryIndex']);
        Route::get('/approved', [AdminController::class, 'approvedDepositIndex']);
        Route::get('/rejected', [AdminController::class, 'rejectedDepositIndex']);
    });
});
