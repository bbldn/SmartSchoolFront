<?php

/*Auth*/

Route::post('login', 'Auth\LoginController@loginFirstStage');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logout', 'Auth\LoginController@logout');

Route::match(['get', 'head'], 'code', 'Auth\LoginController@showCodeForm')->name('code');
Route::post('code', 'Auth\LoginController@loginSecondStage');




Route::prefix('login')->group(function (){
    Route::match(['get', 'head'], '/', 'Auth\LoginController@showLoginForm')->name('login');
    Route::match(['get', 'head'], 'back', 'Auth\LoginController@back')->name('back');
});

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


Route::post('/front/{slug}', 'FrontController@getFront')->where('slug', '([A-z\d-\/_.]+)?');

