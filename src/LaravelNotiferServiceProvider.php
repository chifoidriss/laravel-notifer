<?php

namespace Chifoidriss\Notifer;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelNotiferServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerBladeDirective();
        $this->registerPublishables();
        $this->registerComponents();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'notifer');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/notifer.php', 'notifer');

        // Register the service the package provides.
        $this->app->singleton('notifer', function ($app) {
            return $app->make(LaravelNotifer::class);
        });
    }

    public function registerBladeDirective(): void
    {
        Blade::directive('notiferCss', function () {
            return '<?php echo notiferCss(); ?>';
        });

        Blade::directive('notiferJs', function () {
            return '<?php echo notiferJs(); ?>';
        });
    }

    public function registerComponents(): void
    {
        Blade::component(NotiferComponent::class, 'notifer-messages');
    }

    /**
     * Register Publishable files.
     *
     * @return void
     */
    public function registerPublishables(): void
    {
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/chifoidriss/laravel-notifer'),
        ], 'notifer-assets');

        $this->publishes([
            __DIR__.'/../config/notifer.php' => config_path('notifer.php'),
        ], 'notifer-config');
    }

    public function provides(): array
    {
        return [];
    }
}
