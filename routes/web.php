<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){

    $this->any('historic-search', 'BalanceController@searchHistoric')->name('historic.search');
    $this->get('historic', 'BalanceController@historic')->name('admin.historic');

    $this->post('transfer', 'BalanceController@transferStore')->name('transfer.store');
    $this->post('confirm-transfer', 'BalanceController@confirmTransfer')->name('confirm.transfer');
    $this->get('transfer', 'BalanceController@transfer')->name('balance.transfer');

    $this->post('withdraw', 'BalanceController@withdrawStore')->name('withdraw.store');
    $this->get('withdraw', 'BalanceController@withdraw')->name('balance.withdraw');

    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->get('deposit', 'BalanceController@deposit')->name('balance.deposit');
    $this->get('balance', 'BalanceController@index')->name('admin.balance');

    $this->get('/', 'AdminController@index')->name('admin.home');
});

$this->post('atualizar-perfil', 'Admin\UserController@profileUpdate')->name('profile.update')->middleware('auth');
$this->get('meu-perfil', 'Admin\UserController@profile')->name('profile')->middleware('auth');

$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();
