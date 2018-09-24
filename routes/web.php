<?php


Route::get('/', 'PagesController@index');

Route::get('/about', function (){
    return view('pages.about');
});