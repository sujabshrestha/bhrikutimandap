<?php

namespace Vendor\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Vendor\Repositories\VendorInterface;
use Vendor\Repositories\VendorRepository;

class VendorServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(VendorInterface::class, VendorRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName="Vendor";
        config([
            'vendorRoute' => File::getRequire(loadConfig('route.php', $moduleName)),
            // 'companyImage' => File::getRequire(loadConfig('imageResize.php', $moduleName)),
        ]);
        $this->loadRoutesFrom(loadRoutes('admin.php', $moduleName));
        $this->loadRoutesFrom(loadRoutes('web.php', $moduleName));
        $this->loadMigrationsFrom(loadMigrations($moduleName));
        $this->loadViewsFrom(loadViews($moduleName), $moduleName);

    }
}
