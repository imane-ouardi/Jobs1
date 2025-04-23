<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/contact', 'pages.contact')->name('contact');
Route::get('/signup', function () { return view('pages.signup');})->name('signup');
Route::get('/signin', function () { return view('pages.signin');})->name('signin');
Route::get('/pricing', function () { return view('pages.pricing');})->name('pricing');


