<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'FrontEnd'],function(){
    Route::get('/','HomeController@home');
    Route::get('/product-view/{product}','ProductController@product_view');
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

            // brand
            Route::get('brand','BrandController@index');
            // category
            Route::get('category','CategoryController@category_list');
            Route::post('category-update-status','CategoryController@category_update_status');
            Route::match(['get','post'],'add-edit-category/{id?}','CategoryController@add_edit_category');
            // Route::post('appand-category-lavel','CategoryController@appand_category_lavel');
            Route::post('appand-subcategory','CategoryController@appand_subcategory');
            // seb category
            Route::get('sub-category','CategoryController@subcategory');
            Route::match(['get','post'],'add-sub-category/{id?}','CategoryController@add_subcategory');

            // product
            Route::get('product','ProductController@product_list');
            Route::post('product-update-status','ProductController@product_update_status');
            Route::match(['get','post'],'add-edit-product/{id?}','ProductController@add_edit_product');
            // product attribuites
            Route::match(['get','post'],'add-attributes/{id}','ProductController@add_attributes');
            Route::get('delete-attributes/{id}','ProductController@delete_attributes');
            // sleders
            Route::get('slider','SliderController@slider');
            Route::post('/slider-update-status','SliderController@slider_update_status');
            Route::match(['get','post'],'slider-add/{id?}','SliderController@slider_add');
    });
    
});
