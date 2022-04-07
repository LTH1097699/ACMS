<?php

namespace Modules\Quanlychung\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Quanlychung\Events\Handlers\RegisterQuanlychungSidebar;

class QuanlychungServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterQuanlychungSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('chucdanhs', array_dot(trans('quanlychung::chucdanhs')));
            $event->load('phongbans', array_dot(trans('quanlychung::phongbans')));
            $event->load('noibotcts', array_dot(trans('quanlychung::noibotcts')));
            $event->load('noibodonvis', array_dot(trans('quanlychung::noibodonvis')));
           
    
            // append translations






        });
    }

    public function boot()
    {
        $this->publishConfig('quanlychung', 'permissions');

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
            'Modules\Quanlychung\Repositories\ChucdanhRepository',
            function () {
                $repository = new \Modules\Quanlychung\Repositories\Eloquent\EloquentChucdanhRepository(new \Modules\Quanlychung\Entities\Chucdanh());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Quanlychung\Repositories\Cache\CacheChucdanhDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Quanlychung\Repositories\PhongbanRepository',
            function () {
                $repository = new \Modules\Quanlychung\Repositories\Eloquent\EloquentPhongbanRepository(new \Modules\Quanlychung\Entities\Phongban());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Quanlychung\Repositories\Cache\CachePhongbanDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Quanlychung\Repositories\noibotctRepository',
            function () {
                $repository = new \Modules\Quanlychung\Repositories\Eloquent\EloquentnoibotctRepository(new \Modules\Quanlychung\Entities\noibotct());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Quanlychung\Repositories\Cache\CachenoibotctDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Quanlychung\Repositories\noibodonviRepository',
            function () {
                $repository = new \Modules\Quanlychung\Repositories\Eloquent\EloquentnoibodonviRepository(new \Modules\Quanlychung\Entities\noibodonvi());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Quanlychung\Repositories\Cache\CachenoibodonviDecorator($repository);
            }
        );
        
        
// add bindings






    }
}
