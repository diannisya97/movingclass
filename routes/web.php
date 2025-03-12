<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Auth;

//unutk mengamankan semua route yang ada dis etiap controller yang sudah di buat
route::middleware([Authenticate::class])->group(function(){
    Route::resource('matakuliah', MatakuliahController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
