<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Fix public path for Vercel
        $this->app->bind('path.public', function() {
            return base_path('public');
        });

        // Auto-migrate for SQLite in-memory on Vercel
        if (config('database.default') === 'sqlite' && config('database.connections.sqlite.database') === ':memory:') {
            try {
                if (!Schema::hasTable('projects')) {
                    Artisan::call('migrate --force');
                    Artisan::call('db:seed --force');
                }
            } catch (\Exception $e) {
                // Silently fail
            }
        }
    }
}
