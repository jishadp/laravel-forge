<?php

use App\Jobs\SendOrderNotification;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('users', function () {
    return view('users');
})->name('users');

Route::get('send-email', function () {
    SendOrderNotification::dispatch();
    return "Email Processed Successfully";
})->name('send.email');
