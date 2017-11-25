<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Relation::morphMap([
            'contact' => 'App\Model\Core\Entities\Contact',
            'product' => 'App\Model\Product\Entities\Product',
            'image' => 'App\Model\Core\Entities\Image',
            'address' => 'App\Model\Core\Entities\Address'
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('App\Model\Core\Repositories\AddressRepoInterface', 'App\Model\Core\Repositories\AddressRepo');

    }
}
