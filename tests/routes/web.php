<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['namespace' => 'App\Http\Controllers'], function () {

    /**
     * ==============================
     * For site routes
     * ==============================
     */
    Route::group(['namespace' => 'Site'], function () {

        Route::get('/', 'HomeController@show')->name('site.home.show');
        Route::get('/about', 'AboutController@show')->name('site.about.show');


        // Logout route
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        // Login routes
        Route::group(['middleware' => ['guest']], function () {
            Route::get('/login-register-volunteer', 'LoginAndRegisterVolunteer@show')->name('site.loginandregistervolunteer.show');
            Route::post('/login-register-volunteer-login', 'LoginAndRegisterVolunteer@post_login')->name('site.loginandregistervolunteer.login.post');
            Route::post('/login-register-volunteer-register', 'LoginAndRegisterVolunteer@post_register')->name('site.loginandregistervolunteer.register.post');
        });

        Route::get('/couses', 'CausesController@show')->name('site.couses.show');

        Route::group(['middleware' => ['auth']], function () {
            Route::get('/volunteer-profile', 'VolunteerProfileController@show')->name('site.profile.volunteer.show');
            Route::post('/volunteer-profile', 'VolunteerProfileController@post')->name('site.profile.volunteer.post');

            Route::get('/donate-now/{id}', 'DonateNowController@show')->name('site.donatenow.show');
            Route::post('/donate-now/{id}', 'DonateNowController@post')->name('site.donatenow.post');
        });
    });


    /**
     * ==============================
     * For admin routes
     * ==============================
     */

    //  toDo: make admin routes

});