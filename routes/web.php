<?php
Auth::routes();
Route::get('/', function () {
    return redirect()->route('dashboard.index');
});

Route::get('/home',function () {
    return redirect()->route('dashboard.index');
})->name('home');

Route::namespace('Admin')->prefix('backend')->middleware('auth')->group(function(){

    Route::get('dashboard','Dashboard@index')->name('dashboard.index');

    // Groups Routes
    Route::resource('groups','Groups');
    Route::post('groups/print','Groups@print')->name('groups.print');

    // Users Routes
    Route::resource('users','Users');
    Route::post('users/print','Users@print')->name('users.print');


});