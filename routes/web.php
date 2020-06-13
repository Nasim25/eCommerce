<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin'], function (){
    Route::match(['get','post'],'/','AdminController@login');
    Route::group(['middleware' =>['admin']],function(){
            Route::get('setting','AdminController@setting');
            Route::post('setting-update','AdminController@setting_update');
            Route::post('check-password','AdminController@checkpassword');
            Route::get('logout','AdminController@logout');
            Route::get('deshboard','AdminController@deshboard');

            // section
            Route::get('section','SectionController@section_list');
    });
    
});
