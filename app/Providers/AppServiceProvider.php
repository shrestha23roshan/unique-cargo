<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Repositories\BaseRepository;
use App\Repositories\BaseRepositoryEloquent;
use Modules\Configuration\Repositories\User\UserRepository;
use Modules\Configuration\Repositories\User\UserRepositoryEloquent;
use Modules\Configuration\Repositories\Role\RoleRepository;
use Modules\Configuration\Repositories\Role\RoleRepositoryEloquent;
use Modules\Configuration\Repositories\Module\ModuleRepository;
use Modules\Configuration\Repositories\Module\ModuleRepositoryEloquent;
use Modules\MediaManagement\Repositories\Banner\BannerRepository;
use Modules\MediaManagement\Repositories\Banner\BannerRepositoryEloquent;
use Modules\MediaManagement\Repositories\Brand\BrandRepository;
use Modules\MediaManagement\Repositories\Brand\BrandRepositoryEloquent;
use Modules\ContentManagement\Repositories\AboutUs\AboutUsRepository;
use Modules\ContentManagement\Repositories\AboutUs\AboutUsRepositoryEloquent;
use Modules\ContentManagement\Repositories\Service\ServiceRepository;
use Modules\ContentManagement\Repositories\Service\ServiceRepositoryEloquent;
use Modules\ContentManagement\Repositories\Work\WorkRepository;
use Modules\ContentManagement\Repositories\Work\WorkRepositoryEloquent;
use Modules\Testimonial\Repositories\Testimonial\TestimonialRepository;
use Modules\Testimonial\Repositories\Testimonial\TestimonialRepositoryEloquent;
use Modules\Settings\Repositories\Setting\SettingRepository;
use Modules\Settings\Repositories\Setting\SettingRepositoryEloquent;
use Modules\Seo\Repositories\Seo\SeoRepository;
use Modules\Seo\Repositories\Seo\SeoRepositoryEloquent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultstringlength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            BaseRepository::class,
            BaseRepositoryEloquent::class
        );
        $this->app->singleton(
            UserRepository::class,
            UserRepositoryEloquent::class
        );
        $this->app->singleton(
            RoleRepository::class,
            RoleRepositoryEloquent::class
        );
        $this->app->singleton(
            ModuleRepository::class,
            ModuleRepositoryEloquent::class
        );
        $this->app->singleton(
            BannerRepository::class,
            BannerRepositoryEloquent::class
        );
        $this->app->singleton(
            BrandRepository::class,
            BrandRepositoryEloquent::class
        );
        $this->app->singleton(
            AboutUsRepository::class,
            AboutUsRepositoryEloquent::class
        );
        $this->app->singleton(
            ServiceRepository::class,
            ServiceRepositoryEloquent::class
        );
        $this->app->singleton(
            WorkRepository::class,
            WorkRepositoryEloquent::class
        );
        $this->app->singleton(
            TestimonialRepository::class,
            TestimonialRepositoryEloquent::class
        );
        $this->app->singleton(
            SettingRepository::class,
            SettingRepositoryEloquent::class
        );
        $this->app->singleton(
            SeoRepository::class,
            SeoRepositoryEloquent::class
        );
    }
}
