<?php

namespace Modules\Hopdong\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Hopdong\Events\Handlers\RegisterHopdongSidebar;

class HopdongServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterHopdongSidebar::class);

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
            'Modules\Hopdong\Repositories\HopdongRepository',
            function () {
                $repository = new \Modules\Hopdong\Repositories\Eloquent\EloquentHopdongRepository(new \Modules\Hopdong\Entities\Hopdong());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Hopdong\Repositories\Cache\CacheHopdongDecorator($repository);
            }
        );
// add bindings

    }
}
