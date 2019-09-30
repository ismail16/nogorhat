<?php

//===================== Registration route======================
Route::get('customer/register', 'Author\AuthorRegisterController@index')->name('authorRegister');
Route::get('customer/login', 'Author\AuthorRegisterController@login')->name('authorLogin');
Route::get('customer/registration/verification', 'Auth\RegisterController@authormailverification')->name('authormailverification');
Route::get('customer-registration-verification-done/{token}/{id}', 'Auth\RegisterController@authormailverificationdone')->name('authormailverificationdone');
Route::resource('registration', 'Author\AuthorRegisterController');


Route::get('/', 'frontend\PagesController@index')->name('index');
Route::get('/contact', 'frontend\PagesController@contact')->name('contact');
Route::get('/about', 'frontend\PagesController@about')->name('about');
Auth::routes();

//======================================== Admin route==================================
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('subcategory', 'SubcategoryController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('product', 'ProductController');
});

//======================================== Author route==================================
Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'Author']], function () {
    Route::get('dashboard', 'AuthorRegisterController@index')->name('dashboard');
});

Route::get('/sendemail', 'SendEmailController@index');
Route::get('/sendmail', 'SendEmailController@sendmail');

