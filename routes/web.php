<?php

//===================== Registration route======================
Route::get('customer/register', 'Author\AuthorRegisterController@register')->name('authorRegister');
Route::get('customer/login', 'Author\AuthorRegisterController@login')->name('authorLogin');
Route::get('customer/registration/verification', 'Auth\RegisterController@authormailverification')->name('authormailverification');
Route::get('customer-registration-verification-done/{token}/{id}', 'Auth\RegisterController@authormailverificationdone')->name('authormailverificationdone');
Route::resource('registration', 'Author\AuthorRegisterController');


Route::get('/', 'frontend\PagesController@index')->name('index');
Route::get('/products', 'frontend\PagesController@products')->name('products');
Route::get('/producs/{slug}', 'frontend\PagesController@single_product')->name('single.producs');
Route::get('/category/{id}', 'frontend\PagesController@category')->name('category');
Route::get('/category/{cat_slug}/{sub_cat_slug}', 'frontend\PagesController@sub_category')->name('sub_category');
Route::any('/search', 'frontend\PagesController@search')->name('search');

Route::get('/contact', 'frontend\PagesController@contact')->name('contact');
Route::post('/contact-store', 'frontend\ContactController@contact_store')->name('contact.store');

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
    Route::resource('order', 'OrderController');
    Route::resource('customer', 'CustomerController');
    Route::resource('payment', 'PaymentController');

});

//======================================== Author route==================================
Route::group(['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'author']], function () {
    Route::get('dashboard', 'PagesController@index')->name('dashboard');
    Route::get('orders', 'PagesController@orders')->name('orders');
    Route::get('invoice/{id}', 'PagesController@invoice')->name('invoice');
    Route::get('profile/{id}', 'PagesController@profile')->name('profile');
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
Route::get('payment-pay-now', 'frontend\PayNowController@payment_pay_now')->name('payment_pay_now');

Route::post('payment-pay-store', 'frontend\PayNowController@payment_pay_store')->name('payment_pay_store');
Route::post('payment-pay-cash-in', 'frontend\PayNowController@payment_pay_cash_in')->name('payment_pay_cash_in');
// Route::post('payment-pay-bkash', 'frontend\PayNowController@payment_pay_bkash')->name('payment_pay_bkash');
// Route::post('payment-pay-rocket', 'frontend\PayNowController@payment_pay_rocket')->name('payment_pay_rocket');

Route::get('/invoice/{id}', 'frontend\CheckoutsController@invoice')->name('card.invoice');



Route::get('/sendemail', 'SendEmailController@index');
Route::get('/sendmail', 'SendEmailController@sendmail');

