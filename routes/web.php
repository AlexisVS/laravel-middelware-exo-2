<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::resource('/dashboard/article', DashboardArticleController::class);

});

Route::middleware(['isConnected', 'roleVerification'])->group(function () {
    Route::resource('/article', ArticleController::class);
});


require __DIR__.'/auth.php';
