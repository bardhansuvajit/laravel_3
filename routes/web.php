<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Testimonial\TestimonialController;
// use App\Http\Controllers\Faq\FaqController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('category', [AdminController::class, 'category'])->name('admin.category');
    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');

    Route::post('update-profile-info', [AdminController::class, 'updateInfo'])->name('adminUpdateInfo');

    // category
    Route::get('category/blog', [CategoryController::class, 'blog_category'])->name('admin.category.blog');
    Route::post('categoryBlogCreate', [CategoryController::class, 'blog_category_create'])->name('categoryBlogCreate');
    Route::get('category/blog/delete/{id}', [CategoryController::class, 'blog_category_delete']);

    // blog
    Route::get('blog', [BlogController::class, 'index'])->name('admin.blog');
    Route::get('blog/create', [BlogController::class, 'create'])->name('create');
    Route::post('blogCreate', [BlogController::class, 'blogCreate'])->name('blog_create');

    // testimonial
    Route::get('testimonial', [TestimonialController::class, 'index'])->name('admin.testimonial');

    // faq
    // Route::get('faq', [FaqController::class, 'index'])->name('admin.faq');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('settings', [UserController::class, 'settings'])->name('user.settings');
});
