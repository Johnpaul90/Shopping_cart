'<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'uses'=>'ProductController@getIndex',
    'as'=>'product.index'
]);

Route::get('/add-to-cart/{id}',[
    'uses'=>'ProductController@getAddToCart',
    'as'=>'product.addToCart'

]);

Route::get('/reduceOne/{id}',[
    'uses'=>'ProductController@getReduceByOne',
    'as'=>'product.reduceByOne'

]);

Route::get('/reduceAll/{id}',[
    'uses'=>'ProductController@getRemoveItem',
    'as'=>'product.removeAll'

]);


Route::get('/shopping-cart',[
    'uses'=>'ProductController@getCart',
    'as'=>'product.shoppingCart'

]);

Route::get('/checkout',[
    'uses'=>'ProductController@getCheckout',
    'as'=>'checkout',
    'middleware'=>'auth'

]);

Route::post('/checkout',[
    'uses'=>'ProductController@postCheckout',
    'as'=>'checkout',
    'middleware'=>'auth'

]);

Route::group(['prefix'=>'user'],function (){
    Route::group(['middleware'=>'guest'],function (){
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup',

        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup',

        ]);
        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin',

        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin',

        ]);

    });
    Route::group(['middleware'=>'auth'],function (){

        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile',

        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout',

        ]);

    });

});