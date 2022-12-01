<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Supports\Helper;
use App\Services;
use App\Services\Interfaces;
use Illuminate\Foundation\AliasLoader;
class AppServiceProvider extends ServiceProvider
{

    protected $serviceBindings = [
        Interfaces\BaseService::class => Services\BaseServiceImpl::class,
        Interfaces\UserService::class => Services\UserServiceImpl::class,
        Interfaces\BlogService::class => Services\BlogServiceImpl::class,
        Interfaces\BlogImageService::class => Services\BlogImageServiceImpl::class,
        Interfaces\PlaceService::class => Services\PlaceServiceImpl::class,
        Interfaces\PlaceImageService::class => Services\PlaceImageServiceImpl::class,
        Interfaces\UserBlogCommentService::class => Services\UserBlogCommentServiceImpl::class,
        Interfaces\UserBlogFavouriteService::class => Services\UserBlogFavouriteServiceImpl::class,
        Interfaces\UserBlogVoteService::class => Services\UserBlogVoteServiceImpl::class,
        Interfaces\UserPlaceFavouriteService::class => Services\UserPlaceFavouriteServiceImpl::class,

    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerServices();
    }

    public function registerServices()
    {
        if (! empty($this->serviceBindings)) {
            foreach ($this->serviceBindings as $interface => $handler) {
                $this->app->bind($interface, $handler);
            }
        }
    }

//    public function loadHelpers()
//    {
//        require_once __DIR__.'/../Supports/Constants.php';
//    }

//    protected function loadFacades()
//    {
//        $aliasLoader = AliasLoader::getInstance();
//        $aliasLoader->alias('AppHelper', Helper::class);
//    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->loadHelpers();
//        $this->loadFacades();
    }
}
