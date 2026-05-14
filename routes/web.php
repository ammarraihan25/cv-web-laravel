<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);

Route::get('/cv', function () {
    return view('cv-web', 
    ['name' => 'Muhamad Ammar Raihan Ardiyanto',
    'job_position' => 'Junior Developer',]);
});

use App\Http\Controllers\EducationHistoryController;

Route::get('/education', [EducationHistoryController::class, 'index']);
