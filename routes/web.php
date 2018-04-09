<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
	$this->get('admin', 'AdminController@index')->name('admin.home');
	$this->get('balance', 'BalanceController@index')->name('admin.balance');
	$this->get('/', 'AdminController@index')->name('admin.home');
});


$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();