<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Fontend */
Route::get('/', 'FontendController@getHome');
Route::get('detail/{id}/{slug}.html', 'FontendController@getdetail');
Route::post('detail/{id}/{slug}.html', 'FontendController@postdetail');

Route::get('category/{id}/{slug}.html', 'FontendController@getCategory');

Route::get('seach', 'FontendController@getSeach');

/*giỏ hàng */
Route::group(['prefix' => 'cart'], function () {
    Route::get('add/{id}', 'CartController@getAddcart');

    Route::get('showcart', 'CartController@getshowcart');
    Route::post('showcart', 'CartController@postCom');

    Route::get('delete/{id}', 'CartController@getdeletecart');
    /* ajax */
    Route::post('update', 'CartController@postUpdatecart');
});
Route::get('compele', 'CartController@getCompele');

/* BackEND */
Route::group(['namespace'=>'Admin'],function(){
 Route::group(['prefix' => 'login','middleware'=>'Checklogin'], function () {
     Route::get('/','LoginController@getLogin');
     Route::post('/','LoginController@postLogin');
     });
 Route::get('logout','LoginController@getLogout');
 Route::group(['prefix' => 'admin','middleware'=>'Checklogout'], function () {
    Route::get('home','HomeController@getHome');
    Route::group(['prefix' => 'category'], function () {
        Route::get('/','CategoryController@getCate');
        Route::post('/','CategoryController@postCate');

        Route::get('edit/{id}','CategoryController@getEditCate');
        Route::post('edit/{id}','CategoryController@postEditCate');

        Route::get('delete/{id}','CategoryController@getdelete');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('/','ProductController@getProduct');

        Route::get('add','ProductController@getAddproduct');
        Route::post('add','ProductController@postAddproduct');

        Route::get('edit/{id}','ProductController@getEditproduct');
        Route::post('edit/{id}','ProductController@postEditproduct');

        Route::get('delete/{id}','ProductController@getDeleteproduct');
    });
});


});