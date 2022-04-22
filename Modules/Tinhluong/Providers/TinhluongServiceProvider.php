<?php

namespace Modules\Tinhluong\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Tinhluong\Events\Handlers\RegisterTinhluongSidebar;

class TinhluongServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterTinhluongSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('tinhluongs', array_dot(trans('tinhluong::tinhluongs')));
            $event->load('ngachluongs', array_dot(trans('tinhluong::ngachluongs')));
            $event->load('soluongs', array_dot(trans('tinhluong::soluongs')));
            $event->load('bacluongs', array_dot(trans('tinhluong::bacluongs')));
            // append translations




        });
    }

    public function boot()
    {
        $this->publishConfig('tinhluong', 'permissions');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Tinhluong\Repositories\TinhluongRepository',
            function () {
                $repository = new \Modules\Tinhluong\Repositories\Eloquent\EloquentTinhluongRepository(new \Modules\Tinhluong\Entities\Tinhluong());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Tinhluong\Repositories\Cache\CacheTinhluongDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Tinhluong\Repositories\NgachluongRepository',
            function () {
                $repository = new \Modules\Tinhluong\Repositories\Eloquent\EloquentNgachluongRepository(new \Modules\Tinhluong\Entities\Ngachluong());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Tinhluong\Repositories\Cache\CacheNgachluongDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Tinhluong\Repositories\SoluongRepository',
            function () {
                $repository = new \Modules\Tinhluong\Repositories\Eloquent\EloquentSoluongRepository(new \Modules\Tinhluong\Entities\Soluong());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Tinhluong\Repositories\Cache\CacheSoluongDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Tinhluong\Repositories\BacluongRepository',
            function () {
                $repository = new \Modules\Tinhluong\Repositories\Eloquent\EloquentBacluongRepository(new \Modules\Tinhluong\Entities\Bacluong());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Tinhluong\Repositories\Cache\CacheBacluongDecorator($repository);
            }
        );
// add bindings




    }
}
