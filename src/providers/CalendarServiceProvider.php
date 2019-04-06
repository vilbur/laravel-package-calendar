<?php namespace Vilbur\Calendar\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

class CalendarServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
		/* ROUTES */
		$this->loadRoutesFrom(	__DIR__.'/../routes/routes.php');

		/* VIEWS */
		$this->loadViewsFrom(	__DIR__.'/../../publish/views', 'Calendar');

		/* CONFIG */
		$this->mergeConfigFrom(	__DIR__.'/../../publish/config/Calendar.php', 'Calendar');

		/* FACTORIES */
	    $this->registerEloquentFactoriesFrom(__DIR__.'/../database/factories');

		/* PUBLISH */
		$this->publishes([

			/* CONFIG */
			__DIR__.'/../../publish/config/Calendar.php'	=> config_path('Calendar.php'),

			/* DATABASE */
			__DIR__.'/../../publish/database'	=> $this->app->databasePath(),

			/* ASSETS JS */
			__DIR__.'/../../publish/resources/assets/js'	=> resource_path("assets/js/calendar"),

			/* ASSETS SASS */
			__DIR__.'/../../publish/resources/assets/sass'	=> resource_path("assets/sass/calendar"),

		], 'vilbur/calendar');

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
	{
        $this->app->bind('Calendar', function(){
            return new \Vilbur\Calendar\Calendar;
        });
    }
    /**
     * Register factories.
     * Forum: https://github.com/laravel/framework/issues/11881#issuecomment-261688266
     *
     * @param  string  $path
     * @return void
     */
    protected function registerEloquentFactoriesFrom($path)
    {
        $this->app->make(EloquentFactory::class)->load($path);
    }
}
