<?php

use App\Http\Controllers\adminController;

Route::group(
    [
        'prefix'        => 'admin',
        'namespace'     => 'admin.',
        'as'            => 'admin.',
        'middleware' => ['web','auth']
    ],

    function () {
        //LOGIN
        Route::get('/dashboard', [adminController::class, 'index'])->name('dashboard');
    }
);
