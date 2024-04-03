<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail', function () {
    return view('mail');
});

Route::post('/send-email', [EmailController::class, 'sendWelcomeEmail'])->name('send_email');
