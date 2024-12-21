<?php

use App\Http\Controllers\AnnController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkladController;
use App\Http\Controllers\OtpravkaController;
use App\Http\Controllers\DostavkaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/payment/{id}', function ($id) {
    return view('oplata', ['id' => $id]);
})->name('payment');


Route::get('/nid', [AnnController::class, 'index']);
Route::get('/showLoginForm', [UserController::class, 'showLoginForm'])->name("showLoginForm");
Route::post("/login", [UserController::class,"login"])->name("login");
Route::get("/logout", [UserController::class,"logout"])->name("logout");
Route::get('/showRegForm', [UserController::class, 'showRegForm'])->name("showRegForm");
Route::post("/reg", [UserController::class,"reg"])->name("reg");
Route::get('/lk', [UserController::class, 'lk'])->name('lk')->middleware('auth');
Route::post('/otprav', [UserController::class, 'oplata'])->name('otprav');
Route::get('/showOtpravForm', [UserController::class, 'showOtpravForm'])->name('showOtpravForm');
Route::get('/sklad', [SkladController::class, 'index'])->name('sklad');
Route::get('/dostavka/check', [DostavkaController::class, 'checkForm'])->name('dostavka.check');  // Форма для ввода HPI
Route::post('/dostavka/check', [DostavkaController::class, 'checkStatus'])->name('dostavka_status');  // Проверка статуса
Route::post('/dostavka/update/{id}', [DostavkaController::class, 'updateStatus'])->name('dostavka.update');  // Обновление статуса для почтальонов
