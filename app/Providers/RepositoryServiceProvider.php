<?php

namespace App\Providers;

use App\Repository\CountryRepository;
use Illuminate\Support\ServiceProvider;
use App\Repository\Interfaces\ICountryRepository;
use App\Repository\Interfaces\IProductRepository;
use App\Repository\ProductRepository;
use App\Repository\Interfaces\IOfferRepository;
use App\Repository\OfferRepository;
use App\Repository\WebsiteRepository;
use App\Repository\Interfaces\IWebsiteRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ICountryRepository::class, CountryRepository::class);
        $this->app->bind(IProductRepository::class, ProductRepository::class);
        $this->app->bind(IOfferRepository::class, OfferRepository::class);
        $this->app->bind(IWebsiteRepository::class, WebsiteRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
