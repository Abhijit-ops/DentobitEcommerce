<?php

namespace App\Providers;

use App\Repository\CartRepository;
use App\Repository\CategoryRepository;
use App\Repository\CheckoutRepository;
use App\Repository\ContactUsRepository;
use App\Repository\InterfaceDir\CartInterface;
use App\Repository\InterfaceDir\CategoryInterface;
use App\Repository\InterfaceDir\CheckoutInterface;
use App\Repository\InterfaceDir\ContactUsInterface;
use App\Repository\InterfaceDir\ProductInterface;
use App\Repository\InterfaceDir\SliderInterface;
use App\Repository\InterfaceDir\UserInterface;
use App\Repository\ProductRepository;
use App\Repository\SliderRepository;
use App\Repository\UserRepository;
use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductInterface::class,ProductRepository::class);
        $this->app->bind(CartInterface::class,CartRepository::class);
        $this->app->bind(ContactUsInterface::class,ContactUsRepository::class);
        $this->app->bind(CheckoutInterface::class,CheckoutRepository::class);
        $this->app->bind(UserInterface::class,UserRepository::class);
        $this->app->bind(SliderInterface::class,SliderRepository::class);
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
