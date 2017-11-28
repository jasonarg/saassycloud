<?php

namespace App\Providers;

use App\Http\Middleware\SessionTracker;
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

        $this->app->bind('App\Model\Core\Repositories\AddressRepoInterface', 'App\Model\Core\Repositories\AddressRepo');

        $this->app->bind('App\Model\Tracking\Repositories\SessionRepoInterface', 'App\Model\Tracking\Repositories\SessionRepo');
        $this->app->bind('App\Model\Tracking\Repositories\SessionRequestRepoInterface', 'App\Model\Tracking\Repositories\SessionRequestRepo');
        $this->app->bind('App\Model\Tracking\Repositories\SessionRequestResponseRepoInterface', 'App\Model\Tracking\Repositories\SessionRequestResponseRepo');
        $this->app->bind('App\Model\Tracking\Repositories\ReferralRepoInterface', 'App\Model\Tracking\Repositories\ReferralRepoInterface');

        $this->app->singleton('App\Http\Middleware\SessionTracker', function () {
            return new SessionTracker();
        });
    }
}
