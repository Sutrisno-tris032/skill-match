<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Inertia\Inertia;

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
        //

        Blueprint::macro('auditColumns', function () {
            /** @var \Illuminate\Database\Schema\Blueprint $this */
            $this->string('CreatedBy')->nullable();
            $this->timestamp('CreatedDate')->nullable();
            $this->string('UpdatedBy')->nullable();
            $this->timestamp('UpdatedDate')->nullable();
        });

        Inertia::share('menus', function () {
            return \App\Models\Menus::where('is_active', 1)
                ->get();
        });
    }
}
