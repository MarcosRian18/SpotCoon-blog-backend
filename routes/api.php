<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/get-csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});
Route::resource('articles', ArticleController::class);