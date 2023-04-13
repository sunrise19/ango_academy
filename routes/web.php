<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about-us', [FrontController::class, 'about'])->name('about');
Route::get('/contact-us', [FrontController::class, 'contact'])->name('contact');
Route::get('/management', [FrontController::class, 'management'])->name('management');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/news-blog', [FrontController::class, 'newsBlog'])->name('news-blog');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/create-blog', [BlogController::class, 'create'])->name('blog.create');
Route::post('/create-blog', [BlogController::class, 'store'])->name('blog.store');
Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/edit/{id}', [BlogController::class, 'update'])->name('blog.update');
