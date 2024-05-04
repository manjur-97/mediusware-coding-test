<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Route::group(['middleware' => 'transaction'], function () {
   
    Route::get('/transaction', [TransactionController::class, 'transaction'])->name('transaction');
    Route::get('/deposit', [TransactionController::class, 'deposit'])->name('deposit');
    Route::get('/withdrawal', [TransactionController::class, 'withdrawal'])->name('withdrawal');
    Route::get('/', [TransactionController::class, 'index'])->name('dashboard');
    Route::get('/create_deposit', [TransactionController::class, 'createDeposit'])->name('createDeposit');
    Route::post('/store_deposit', [TransactionController::class, 'storeDeposit'])->name('storeDeposit');
    Route::get('/create_withdrawal', [TransactionController::class, 'createWithdrawal'])->name('createWithdrawal');
    Route::post('/store_withdrawal', [TransactionController::class, 'storeWithdrawal'])->name('storeWithdrawal');
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
