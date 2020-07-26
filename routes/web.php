<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'FrontEnd'],function(){
    Route::get('/','HomeController@home');
    Route::get('/about','HomeController@about');
    Route::get('/product-view/{product}','ProductController@product_view');
    Route::get('/product-by-category/{product}','ProductController@product_by_category');
    Route::get('/product-by-subcategory/{id}','ProductController@product_by_subcategory');
    Route::post('/serch-products','ProductController@search_product');

    Route::post('product-review','ProductController@product_review');
    Route::post('append-subcategory','ProductController@append_subcategory');
    
    Route::post('add-to-cart','CartController@addToCart');
    Route::get('cart','CartController@cart')->name('cart');
    Route::get('cart-item-delete/{rowId}','CartController@cart_item_delete');
    Route::post('cart-item-update','CartController@cart_item_update');
    Route::get('checkout','CartController@checkout');


    Route::get('customer/login','LoginController@customer_login')->name('customerlogin');
    Route::post('customer/login','LoginController@customer_login_login')->name('customerlogin');
    Route::post('customer/register','LoginController@customer_register')->name('customerregister');
    Route::get('customer-login','LoginController@index')->name('customer.login');
    Route::post('customer-login','LoginController@login');

    Route::post('subscribe','SubscribeController@subscribe');
      Route::group(['middleware'=>['auth']],function(){
        Route::get('user-deshboard','DeshboardController@deshboard')->name('user.deshboard');
        Route::get('shipping','DeshboardController@shipping')->name('shipping');
        Route::post('shipping-store','DeshboardController@shipping_store');
        Route::get('payment','DeshboardController@payment')->name('payment');
        Route::post('payment-store','DeshboardController@payment_store');
        Route::get('order-success','DeshboardController@order_success')->name('order.success');
    });
});

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin'], function (){
    Route::match(['get','post'],'login','AdminController@login');
    Route::group(['middleware' =>['admin']],function(){
            
            Route::get('setting','AdminController@setting');
            Route::post('setting-update','AdminController@setting_update');
            Route::post('check-password','AdminController@checkpassword');
            Route::get('logout','AdminController@logout');
            Route::get('deshboard','AdminController@deshboard');
            // section
            Route::get('section','SectionController@section_list');
            Route::get('section-add','SectionController@section_add');
            Route::post('section-store','SectionController@section_store');
            Route::post('section-update-status','SectionController@section_update_status');
            // brand
            Route::get('brand','BrandController@index');
            Route::get('brand-create','BrandController@create');
            Route::post('brand-store','BrandController@brand_store');
            // color
            Route::get('color','ColorController@index');
            Route::get('color-insert','ColorController@create');
            Route::post('color-store','ColorController@color_store');
            Route::post('color-import','ColorController@color_import');
            Route::get('color-delete/{id}','ColorController@color_delete');
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
            // order
            Route::get('order','OrderController@index');
            Route::get('order-details/{id}','OrderController@index_details');
    });
    
});
