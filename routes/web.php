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

Route::get('/debug-assets', function () {
    $path = public_path('build/manifest.json');
    return [
        'public_path' => public_path(),
        'manifest_exists' => file_exists($path),
        'manifest_path' => $path,
        'base_path' => base_path(),
        'build_dir_exists' => is_dir(public_path('build')),
        'files_in_build' => is_dir(public_path('build')) ? scandir(public_path('build')) : 'no build dir',
    ];
});
