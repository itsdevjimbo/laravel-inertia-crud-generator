<?php
namespace JMagusib\CrudGenerator\Providers;

use Illuminate\Support\ServiceProvider;
use Route;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__."/../Configs/crud-generator.php" => config_path("crud-generator.php"),
        ]);

        $this->registerRoutes();
    }

    public function register()
    {
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('crud-generator.root_url'),
            'middleware' => array_merge(['web'], config('crud-generator.middleware')),
        ];
    }
}
