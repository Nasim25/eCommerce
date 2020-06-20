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
            Route::post('section-update-status','SectionController@section_update_status');

            // category
            Route::get('category','CategoryController@category_list');
            Route::post('category-update-status','CategoryController@category_update_status');
            Route::match(['get','post'],'add-edit-category/{id?}','CategoryController@add_edit_category');
            Route::post('appand-category-lavel','CategoryController@appand_category_lavel');

            // product
            Route::get('product','ProductController@product_list');
            Route::post('product-update-status','ProductController@product_update_status');
            Route::match(['get','post'],'add-edit-product/{id?}','ProductController@add_edit_product');
    });
    
});
