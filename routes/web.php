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

$pages = [
    'locations',
    'services',
    'doctors',
    'glossary',
    'blog',
];

Route::view('/', 'pages.home');

foreach ($pages as $page) {
    Route::view("/$page", "pages.$page.index")->name("pages.$page.index");
    Route::view("/$page/show", "pages.$page.show")->name("pages.$page.show");
}
