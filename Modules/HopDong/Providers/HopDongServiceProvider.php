<?php

namespace Modules\HopDong\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\HopDong\Events\Handlers\RegisterHopDongSidebar;

class HopDongServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterHopDongSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('hopdongs', array_dot(trans('hopdong::hopdongs')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('hopdong', 'permissions');

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
            'Modules\HopDong\Repositories\HopdongRepository',
            function () {
                $repository = new \Modules\HopDong\Repositories\Eloquent\EloquentHopdongRepository(new \Modules\HopDong\Entities\Hopdong());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\HopDong\Repositories\Cache\CacheHopdongDecorator($repository);
            }
        );
// add bindings

    }
}
