<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

//sintak: Route::<jenisMethod>[<alamatUrl>, <prosesYgAkanDijalankan>]
Route::get('/baru/home',[HalamanController::class,'home'])->name('topmenu1');
Route::get('/baru/about',[HalamanController::class,'about'])->name('topmenu2');
Route::get('/baru/contact',[HalamanController::class,'contact'])->name('topmenu3');
Route::resource('biodatas', BiodataController::class);


/*
Route::get('/', function () {
    return view('welcome');
});

//kita akan buat http://pemrograman-web-b.test/hello
Route::get('/hello', function() {
    return "Apa kabar dunia";
});
Route::get('/belajar', function() {
    echo '<h1>Apa kabar dunia</h1>';
    echo 'tetap asik.....';
});
Route::get('/belajar/laravel', function() {
    echo '<h1>Apa kabar dunia laravel</h1>';
    echo 'belajar laravel tetap asik.....';
});
Route::get('/biodata/{namadepan}/{namabelakang}', function($namadepan, $namabelakang) {
    return "<h1>Apa kabar dunia laravel</h1>
            Selamat belajar $namadepan $namabelakang";
});

// View tanpa controller:
// http://pemrograman-web-b.test/web --> home
// http://pemrograman-web-b.test/web/about --> about
// http://pemrograman-web-b.test/web/contact --> contact
Route::get('/web', function() {
    return view('web_home'); // Merujuk ke web_home.blade.php
})->name('web.home');

Route::get('/web/about', function() {
    return view('web_about'); // Merujuk ke web_about.blade.php
})->name('web.about');

Route::get('/web/contact', function() {
    return view('web_contact'); // Merujuk ke web_contact.blade.php
})->name('web.contact');

// View dengan controller:
// http://pemrograman-web-b.test/web --> home
// http://pemrograman-web-b.test/web/about --> about
// http://pemrograman-web-b.test/web/contact --> contact
Route::get('/new', [PageController::class, 'home'])->name('home');
Route::get('/new/about', [PageController::class, 'about'])->name('about');
Route::get('/new/contact', [PageController::class, 'contact'])->name('contact');
*/