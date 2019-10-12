<?php

//===================== Registration route======================
Route::get('customer/register', 'Author\AuthorRegisterController@index')->name('authorRegister');
Route::get('customer/login', 'Author\AuthorRegisterController@login')->name('authorLogin');
Route::get('customer/registration/verification', 'Auth\RegisterController@authormailverification')->name('authormailverification');
Route::get('customer-registration-verification-done/{token}/{id}', 'Auth\RegisterController@authormailverificationdone')->name('authormailverificationdone');
Route::resource('registration', 'Author\AuthorRegisterController');


Route::get('/', 'frontend\PagesController@index')->name('index');
Route::get('/products', 'frontend\PagesController@products')->name('products');
Route::get('/producs/{id}', 'frontend\PagesController@producs1')->name('single.producs');
Route::get('/contact', 'frontend\PagesController@contact')->name('contact');
Route::get('/about', 'frontend\PagesController@about')->name('about');
Route::get('/faq', 'frontend\PagesController@faq')->name('faq');
Route::get('/terms-conditions', 'frontend\PagesController@terms_conditions')->name('terms.conditions');
Route::get('/returns-replacement', 'frontend\PagesController@returns_replacement')->name('returns.replacement');
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
Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'author']], function () {
    Route::get('dashboard', 'AuthorRegisterController@index')->name('dashboard');
//    Route::get('profile/{id}', 'frontend\PagesController@profile')->name('profile');
});

//======================================== Cart route==================================
//Route::resource('card', 'frontend\CartsController');

Route::group(['prefix' => 'cards'], function(){
    Route::get('/', 'frontend\CartsController@index')->name('cart.index');
    Route::post('/store', 'frontend\CartsController@store')->name('card.store');
    Route::post('/update/{id}', 'frontend\CartsController@update')->name('carts.update');
    Route::get('/delete/{id}', 'frontend\CartsController@delete')->name('carts.delete');
});

Route::resource('checkout', 'frontend\CheckoutsController');
Route::get('/invoice', 'frontend\CheckoutsController@invoice')->name('card.invoice');



Route::get('/sendemail', 'SendEmailController@index');
Route::get('/sendmail', 'SendEmailController@sendmail');

