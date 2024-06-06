<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\contactController;
use App\Http\Middleware\CustomAuthMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dashboardController;

Route::get('/', function () { return view('home'); });
Route::get('/about', function () { return view('about'); });
// Route::get('/contact', function () { return view('contact'); });

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/contact', [contactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware([CustomAuthMiddleware::class])->group(function () {

      Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');

      Route::get('/users', [usersController::class, 'users'])->name('users');
      Route::post('/users', [UsersController::class, 'store'])->name('users.store');
      Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
      Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
      Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');

      Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
      Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
      Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
      Route::put('/categories/{category}', [CategoriesController::class, 'update'])->name('categories.update');



      // Blogları listeleme
      Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');

      // Blog oluşturma formunu gösterme ve blog oluşturma işlemi
      Route::get('/addblog', [BlogController::class, 'create'])->name('addblog');
      Route::post('/addblog', [BlogController::class, 'store'])->name('blogs.store');

      // Blogu düzenleme ve güncelleme işlemleri
      Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
      Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');

      // Blogu silme işlemi
      Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
      // Route::get('/addblog', [dashboardController::class, 'addblog'])->name('addblog');

      Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
      Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
      Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});