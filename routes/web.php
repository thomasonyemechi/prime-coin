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




Route::get('/get_user', [AuthController::class, 'get_user']);



Route::group(['middleware' => ['auth']], function () {
    // Route::get('/appointment/all', [AdminController::class, 'allAppointment']);
    Route::view('/copy', 'users.copy');
    Route::get('/dashboard', [UserController::class, 'indexU']);
    Route::get('/deposit', [UserController::class, 'depositIndex'])->middleware('wallet');


    Route::get('/wallet', [UserController::class, 'walletSettingIndex']);
    Route::get('/withdrawal', [UserController::class, 'withdrwal']);
    Route::post('/withdrawal', [UserController::class, 'make_withdrawal']);
    Route::post('/wallet_update', [UserController::class, 'updateWallet']);
    Route::post('/transfer', [UserController::class, 'transfer'])->name('transfer');


    Route::get('/transfer', [UserController::class, 'transferIndex']);
    Route::get('/received', [UserController::class, 'rIndex']);
    Route::get('/earnings', [UserController::class, 'earningsIndex']);
    Route::get('/convert', [UserController::class, 'convertIndex']); //
    Route::get('/trade', [UserController::class, 'tradeIndex']); //
    Route::post('/trade_spc', [UserController::class, 'tradeSpc'])->name('trade_spc'); //
    Route::post('/buy_primecoin', [UserController::class, 'buyPrimeCoin'])->name('buy_primecoin');

    Route::post('/make_deposit', [TransactionController::class, 'makeDeposit'])->name('make_deposit');    
});



Route::group(['prefix' => 'admin/', 'as' => 'admin.' ,'middleware' => ['auth','admin']], function () {
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



    Route::group(['prefix' => 'withdrawal/' ], function () {
        Route::get('/pending', [AdminController::class, 'withdrawPendingIndex']);
        Route::get('/history', [AdminController::class, 'withdrawHistoryIndex']);
        Route::post('/approve_withdrawal', [AdminController::class, 'approveWithdrawal']); //approve_withdrawal
    });
});
