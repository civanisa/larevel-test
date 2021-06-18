<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ornek;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ornek', function() {
    return view('ornek');
});

Route::get('/phpsivas/{isim}', [Ornek::class,'test']);
