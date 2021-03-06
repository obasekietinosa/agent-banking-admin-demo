<?php

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
    //All the admin routes will be defined here...
    Route::namespace('Auth')->group(function () {

        //Login Routes
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login');
        Route::post('/logout', 'LoginController@logout')->name('logout');

        //Forgot Password Routes
        Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');
    });
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', 'HomeController@index')->name('home');

        Route::prefix('/agents')->name('agents.')->group(function () {
            Route::get('/', 'AgentController@index')->name('home');

            Route::get('new', 'AgentController@create')->name('create');
            Route::post('new', 'AgentController@store')->name('store');

            Route::get('{agent}', 'AgentController@show')->name('show');

            Route::get('{agent}/edit', 'AgentController@edit')->name('edit');
            Route::post('{agent}/edit', 'AgentController@update')->name('update');

            Route::get('{agent}/delete', 'AgentController@destroy')->name('destroy');
        });
    });
});
