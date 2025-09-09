<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pegawai', function() {
    return view('pegawai');
});

Route::get('/test', function (){
    return redirect()->to('/');
});

Route::fallback(function () {
    return view('404');
});
