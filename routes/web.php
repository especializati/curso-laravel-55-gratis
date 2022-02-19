<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BalanceController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::get('balance', [BalanceController::class, 'index'])->name('admin.balance');
    Route::get('deposit', [BalanceController::class, 'deposit'])->name('balance.deposit');
    Route::post('deposit', [BalanceController::class, 'depositStore'])->name('deposit.store');
    Route::get('withdraw', [BalanceController::class, 'withdraw'])->name('balance.withdraw');
    Route::post('withdraw', [BalanceController::class, 'withdrawStore'])->name('withdraw.store');
    Route::get('transfer', [BalanceController::class, 'transfer'])->name('balance.transfer');
    Route::post('confirm-transfer', [BalanceController::class, 'confirmTransfer'])->name('confirm.transfer');
    Route::post('transfer', [BalanceController::class, 'transferStore'])->name('transfer.store');
    Route::get('historic', [BalanceController::class, 'historic'])->name('admin.historic');
    Route::any('historic-search', [BalanceController::class, 'searchHistoric'])->name('historic.search');
});

Route::get('meu-perfil', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('atualizar-perfil', [UserController::class, 'profileUpdate'])->name('profile.update')->middleware('auth');

Route::get('/', [SiteController::class, 'index'])->name('site.home');

Auth::routes();
