<?php

use Illuminate\Support\Facades\Route;

// Front End Pages
Route::view('/', 'Pages.index');
Route::view('/about', 'Pages.about');
Route::view('/contact','Pages.contact');
Route::view('/blog','Pages.blog');
