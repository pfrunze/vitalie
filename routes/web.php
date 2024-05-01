<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/{locale}', [LanguageController::class, 'changeLanguage'])->name('language.change');
