<?php
Route::get('/', function (){
    return view('welcome' [
        'name' => 'World'
    ]);

});




Route::get('/about', function (){
    return view('about');
});
?>
