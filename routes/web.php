<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::match(['GET', 'POST'], '/start', [IndexController::class, 'indexAction'])->name('start');
Route::get('/blog', function () {
    return view('blog');
/*Route::match(['GET', 'POST'], '/blog', [IndexController::class, 'indexAction'])->name('blog');
Route::get('/blog', function () {
    return view('blog');
*/
});

