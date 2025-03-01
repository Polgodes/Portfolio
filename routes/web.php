<?php

use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigationController::class, 'home'])->name('home');
Route::get('/about', [NavigationController::class, 'about'])->name('about');
Route::get('/photo', [NavigationController::class, 'photo'])->name('photo');
Route::get('/project', [NavigationController::class, 'project'])->name('project');
