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

Route::get('/', function () {
    return view('welcome');
});
/* Products routers  */

Route::get('/boutique', 'ProductController@index')->name('products.index');
Route::get('/boutique/{slug}','ProductController@show')->name('products.show');
    
//RoutesCart

Route::post('/panier/ajouter','CartController@store' )->name('cart.store') ; 
Route::get('/panier', 'CartController@index')->name('cart.index') ; 
Route::post('/panier/{rowId}', 'CartController@destroy')->name('cart.destroy');
Route::get('/viderPanier', function(){
Cart::destroy();
});