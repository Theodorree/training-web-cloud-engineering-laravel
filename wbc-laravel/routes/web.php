<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

Route::post('/auth', [AuthController::class, 'authenticate'])->middleware('guest')->name('auth');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/home', function () {
    $datas = [
        [
            'nama' => 'Theo',
            'alamat' => 'Bandung'
        ],
        [
            'nama' => 'Richard',
            'alamat' => 'Surabaya'
        ],
        [
            'nama' => 'Keith',
            'alamat' => 'Jakarta'
        ],
        [
            'nama' => 'Raffael',
            'alamat' => 'Tangerang'
        ],
    ];
    return view('home', [
        'data' => $datas
    ]);
})->middleware('auth')->name('home');
