<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;


Route::resource('matakuliah', MatakuliahController::class);
Route::get('/', function () {
    return view('welcome');
});
