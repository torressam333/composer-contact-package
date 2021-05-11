<?php
namespace Phantomdev\Contact\controllers;

Route::group(['namespace' => 'Phantomdev\Contact\http\controllers'], function () {
    Route::get('contact', [ContactController::class, 'index']);
    Route::post('contact', [ContactController::class, 'send']);
});
