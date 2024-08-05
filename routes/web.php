<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('webinar'); });
Route::get('/thankyou', function () { return view('thankyou'); })->name('thankyou');
