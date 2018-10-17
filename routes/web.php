<?php
Route::get('/', function (){

    return view('pages.index');
});

Route::get('/about', function (){
    return view('pages.about');
});

Route::resource('posts', 'PostsController');
?>
