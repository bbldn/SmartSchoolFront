<?php

/*Auth*/

Route::post('login', 'Auth\LoginController@loginFirstStage');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logout', 'Auth\LoginController@logout');

Route::match(['get', 'head'], 'code', 'Auth\LoginController@showCodeForm')->name('code');
Route::post('code', 'Auth\LoginController@loginSecondStage');

Route::prefix('login')->group(function () {
    Route::match(['get', 'head'], '/', 'Auth\LoginController@showLoginForm')->name('login');
    Route::match(['get', 'head'], 'back', 'Auth\LoginController@back')->name('back');
});

/*Cabinet*/

Route::match(['get', 'post'], '/', 'ChildrenController@indexAction')->name('index');
Route::match(['get', 'post'], '/child/{id}', 'ChildrenController@childAction')->name('child');
Route::get('/settings', 'SettingsController@indexAction')->name('settings');
Route::post('/settings', 'SettingsController@saveAction');


Route::prefix('additional-parents')->group(function () {
    Route::match(['get', 'post'], '/', 'AdditionalParentController@additionalParentAction')->name('additional-parents');
    Route::get('add', 'AdditionalParentController@showAddAction')->name('additional-parents-add');
    Route::post('add', 'AdditionalParentController@addNewAdditionalParentAction');
});


/*Report*/
Route::post('/report', 'ChildrenController@reportAction')->name('report');
Route::post('/get-access-by-date', 'ChildrenController@getAccessByDateAction');

/*Key*/
Route::prefix('key')->group(function () {
    Route::post('lock', 'ChildrenController@lockKeyAction');
    Route::post('unlock', 'ChildrenController@unlockKeyAction');
});

/*API*/
Route::post('/auth/{slug}', 'FrontController@getFront')->where('slug', '([A-z-\/_.]+)?');
Route::post('/front/{slug}', 'FrontController@getFront')->where('slug', '([A-z-\/_.]+)?');
//Route::post('/auth/{slug}', 'FrontController@getFront')->where('slug', '([A-z\d-\/_.]+)?');
//Route::post('/front/{slug}', 'FrontController@getFront')->where('slug', '([A-z\d-\/_.]+)?');

