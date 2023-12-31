<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/news',function(){
    return view("index");
} );

Route::post('/news', [NewsController::class, 'store']);

Route::fallback(function() {
    return redirect('/news');
});