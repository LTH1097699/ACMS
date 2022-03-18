<?php

namespace Modules\Phatsinhtang\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Phatsinhtang\Events\Handlers\RegisterPhatsinhtangSidebar;

class PhatsinhtangServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterPhatsinhtangSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('thongtinnhanviens', array_dot(trans('phatsinhtang::thongtinnhanviens')));
            $event->load('chuyennoibotcts', array_dot(trans('phatsinhtang::chuyennoibotcts')));
            
            $event->load('trangthais', array_dot(trans('phatsinhtang::trangthais')));
            // append translations





        });
    }

    public function boot()
    {
        $this->publishConfig('phatsinhtang', 'permissions');

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
            'Modules\Phatsinhtang\Repositories\ThongtinnhanvienRepository',
            function () {
                $repository = new \Modules\Phatsinhtang\Repositories\Eloquent\EloquentThongtinnhanvienRepository(new \Modules\Phatsinhtang\Entities\Thongtinnhanvien());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Phatsinhtang\Repositories\Cache\CacheThongtinnhanvienDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Phatsinhtang\Repositories\chuyennoibotctRepository',
            function () {
                $repository = new \Modules\Phatsinhtang\Repositories\Eloquent\EloquentchuyennoibotctRepository(new \Modules\Phatsinhtang\Entities\chuyennoibotct());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Phatsinhtang\Repositories\Cache\CachechuyennoibotctDecorator($repository);
            }
        );
        
        $this->app->bind(
            'Modules\Phatsinhtang\Repositories\trangthaiRepository',
            function () {
                $repository = new \Modules\Phatsinhtang\Repositories\Eloquent\EloquenttrangthaiRepository(new \Modules\Phatsinhtang\Entities\trangthai());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Phatsinhtang\Repositories\Cache\CachetrangthaiDecorator($repository);
            }
        );
// add bindings





    }
}
