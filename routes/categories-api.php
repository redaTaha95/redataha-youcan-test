<?php


use App\Http\Controllers\Api\CategoryController;

Route::apiResource('categories',CategoryController::class);
Route::get('/productsByCategory/{category_id}', [CategoryController::class, 'filterProductsByCategory'])
    ->where('category_id', '[0-9]+');
