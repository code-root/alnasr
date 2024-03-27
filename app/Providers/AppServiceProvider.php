<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('partials.navbar',
            function ($view) {
            $category = Category::latest()->get();
            $subCategory = SubCategory::latest()->take(5)->get();
            $view->with('category', $category ?? []);
            $view->with('subCategory', $subCategory ?? []);
            } );

            view()->composer('partials.footer',
            function ($view) {
            $category = Category::latest()->take(5)->get();
            $subCategory = SubCategory::latest()->take(5)->get();
            $category = Category::get() ?? [];
            $view->with('subCategory', $subCategory ?? []);
            $view->with('category', $category ?? []);
            } );


        view()->composer('dashboard.layouts.navbar',
            function ($view) {
            $user = Auth::user();
            $view->with('user', $user ?? []);
            }
        );
    }
}
