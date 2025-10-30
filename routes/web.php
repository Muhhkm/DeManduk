<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


//berita acara
Route::view('/blog', 'blog.blog')->name('blog');
Route::view('/detail', 'blog.detail')->name('blog.detail');





