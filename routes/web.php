<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\EditorController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/templates', [TemplatesController::class, 'index'])->name('templates');
Route::get('/editor', [EditorController::class, 'index'])->name('editor');
Route::get('/editor/{template}', [EditorController::class, 'index'])->name('editor.template');
