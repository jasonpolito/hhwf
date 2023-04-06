<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'pages.home');
Route::view('/locations', 'pages.locations.index')->name('pages.locations.index');
Route::view('/locations/show', 'pages.locations.show')->name('pages.locations.show');
Route::view('/location', 'pages.location');
Route::view('/service', 'pages.service');
Route::view('/services', 'pages.services');
Route::view('/post', 'pages.post');
Route::view('/blog', 'pages.blog');
