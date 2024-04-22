<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['verify.shopify']], function () {

    // All Rules page
    Route::get('/', [\App\Http\Controllers\FaqController::class, 'showfaq'])
    ->name('faq');
    Route::post('/', [\App\Http\Controllers\FaqController::class, 'createfaq'])
    ->name('faq.create');

});