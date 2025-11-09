<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

use App\Http\Controllers\CategoryController;

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

use App\Http\Controllers\SubjectController;

Route::get('/subject/{id}', [SubjectController::class, 'show'])->name('subject.show');

use App\Http\Controllers\WriterController;

Route::get('/writer', [WriterController::class, 'index'])->name('writer.index');
Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writer.show');

Route::view('/about', 'about')->name('about');
