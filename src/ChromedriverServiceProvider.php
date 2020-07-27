<?php declare(strict_types=1);
/**
 * @author Vitaliy Viznyuk <vitaliyviznyuk@gmail.com>
 * @copyright Copyright (c) 2020 Vitaliy Viznyuk
 */

namespace vitaliyviznyuk\LaravelChromedriver;

use Exception;
use Illuminate\Support\ServiceProvider;

class ChromedriverServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * Register any package services.
     *
     * @return void
     *
     * @throws Exception
     */
    public function register(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\InstallCommand::class,
                Console\ChromeDriverCommand::class
            ]);
        }
    }
}
