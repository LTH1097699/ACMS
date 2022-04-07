<?php

namespace Modules\Bangchamcong\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Bangchamcong\Events\Handlers\RegisterBangchamcongSidebar;

class BangchamcongServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterBangchamcongSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('bangchamcongs', array_dot(trans('bangchamcong::bangchamcongs')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('bangchamcong', 'permissions');

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
            'Modules\Bangchamcong\Repositories\BangchamcongRepository',
            function () {
                $repository = new \Modules\Bangchamcong\Repositories\Eloquent\EloquentBangchamcongRepository(new \Modules\Bangchamcong\Entities\Bangchamcong());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Bangchamcong\Repositories\Cache\CacheBangchamcongDecorator($repository);
            }
        );
// add bindings

    }
}
