<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiparisController;
use App\Http\Controllers\SiparislerController;



Route::get('/', function () {
    return view('welcome');

});


Route::get('/siparis', [SiparisController::class, 'siparisList']);
Route::get('/db', [SiparisController::class, 'dbSiparis']);


Route::get('siparisler/{SiparisNo}',[SiparislerController::class, 'destroy'])->name('siparisler.destroy');
Route::resource('siparisler', SiparislerController::class);


//Route::get('/siparis/{SiparisNo}', [SiparisController::class, 'edit'])->name('siparis.edit');
