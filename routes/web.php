<?php
Route::get('/', function (){
    return view('welcome');
});

Route::get('/about', function (){
    return view('pages.about');
});

Route::get('/products/',['uses => ProductsController@index']);
Route::get('/products/details',['uses => ProductsController@index']);
