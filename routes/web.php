<?php

/*Auth*/
Route::match(['get', 'head'], 'login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logout', 'Auth\LoginController@logout');

Route::match(['get', 'head'], 'code', 'Auth\LoginController@showCodeForm')->name('code');
Route::post('code', 'Auth\LoginController@code');

//Route::prefix('password')->group(function () {
//    Route::post('email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//    Route::match(['get', 'head'], 'reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//    Route::post('reset', 'Auth\ResetPasswordController@reset')->name('password.update');
//    Route::match(['get', 'head'], 'reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//});

//Route::match(['get', 'head'], 'register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');



/*Cabinet*/
Route::match(['get', 'post'], '/', 'ChildrenController@indexAction')->name('index');
Route::match(['get', 'post'], '/child/{id}', 'ChildrenController@childAction')->name('child');
Route::get('/settings', 'SettingsController@indexAction')->name('settings');
Route::post('/settings', 'SettingsController@saveAction');
