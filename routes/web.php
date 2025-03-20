<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\admin\Companycontroller;
use App\Http\Controllers\Frontend\OtherController;
use App\Http\Controllers\Frontend\pageController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


//Fronend Routes
Route::get('/', [pageController::class, 'home'])->name('home');
Route::get('/search', [pageController::class, 'search'])->name('search');
Route::get('/category/{slug}', [pageController::class, 'category'])->name('category');
Route::get('/article/{id}', [pageController::class, 'article'])->name('article');


//Admin Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource("/admin/company", Companycontroller::class)->names('admin.company');
    Route::resource("/admin/category", CategoryController::class)->names('admin.category');
    Route::resource("/admin/article", ArticleController::class)->names('admin.article');
});

Route::fallback([OtherController::class, 'pageNotFound']);


require __DIR__ . '/auth.php';
