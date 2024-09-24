<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthWriter;
use App\Http\Middleware\WriterAuth; 

// Route for the home page
Route::get('/', [HomeController::class, 'index']);

// Route for the About Us page
Route::get('/about', [AboutUsController::class, 'about'])->name('about');

// Route for viewing a specific article through its ID
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');

// Route for viewing articles through the category slug
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

// Route for viewing articles through the tag slug
Route::get('/tag/{slug}', [TagController::class, 'show'])->name('tag.show');

// Route for the legal information page
Route::get('/legal', [LegalController::class, 'index'])->name('legal');

// Route for the search functionality
Route::get('/search', [SearchController::class, 'index'])->name('search');

// Updated middleware references for writer console
Route::get('/writer-console', [ArticleController::class, 'create'])->middleware('WriterAuth');
Route::post('/writer-console', [ArticleController::class, 'store'])->middleware('WriterAuth');

// Writer authentication routes
Route::get('/writer-login', [AuthWriter::class, 'showLoginForm'])->name('writer.login');
Route::post('/writer-login', [AuthWriter::class, 'login']);
Route::post('/writer-logout', [AuthWriter::class, 'logout'])->name('writer.logout');

// Include the default authentication routes
require __DIR__.'/auth.php';