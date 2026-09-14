<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('address');
// });


Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/get-district',[HomeController::class,'getDistrict']);