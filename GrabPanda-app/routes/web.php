<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Project;

Route::get('/', [Project::class, 'login']);
Route::get('/login', [Project::class, 'login']);
Route::get('/fetch_login', [Project::class, 'fetch_login']);
Route::get('/logout', [Project::class, 'logout']);
Route::post('regAccount', [Project::class, 'regAccount']);

Route::get('/GrabPanda', [Project::class, 'landing']);
