<?php

namespace App\Providers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\BrandTrait;
use App\Traits\CategoryTrait;
use Illuminate\Support\ServiceProvider;

class NavigationServiceProvider extends ServiceProvider
{
    use CategoryTrait,BrandTrait;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('*', function ($view) {
            $view->with('navigationCategory', $this->getCaegory());
            $view->with('sidenNavBrandCount', $this->getBrandNameByCategory());
            $view->with('topBrands', $this->getAllBrands());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
