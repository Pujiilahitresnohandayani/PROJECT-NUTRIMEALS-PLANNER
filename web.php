<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PerencanaanMakananController;
use App\Http\Controllers\MealPlanController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminMealController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\ReminderController;


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Rute Perencanaan Makanan
    Route::get('/perencanaan-makanan', [PerencanaanMakananController::class, 'index'])->name('perencanaan');
    Route::get('/perencanaan-makanan/{id}', [PerencanaanMakananController::class, 'show'])->name('perencanaan.show');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show')->middleware('auth');

    

});
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::resource('meal_plans', AdminMealController::class)->names([
        'index' => 'admin.meal_plans.index',
        'create' => 'admin.meal_plans.create',
        'store' => 'admin.meal_plans.store',
        'show' => 'admin.meal_plans.show',
        'edit' => 'admin.meal_plans.edit',
        'update' => 'admin.meal_plans.update',
        'destroy' => 'admin.meal_plans.destroy',
    ]);
});

Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::resource('blogs', AdminBlogController::class)->names([
        'index' => 'admin.blogs.index',
        'create' => 'admin.blogs.create',
        'store' => 'admin.blogs.store',
        'show' => 'admin.blogs.show',
        'edit' => 'admin.blogs.edit',
        'update' => 'admin.blogs.update',
        'destroy' => 'admin.blogs.destroy',
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('pengingat', ReminderController::class);
});

