<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return view('template.default'); //เรียกโฟลเดอร์ใส่จุด
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::get('/calculate', [App\Http\Controllers\MyController::class, 'inFo']);
Route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);
