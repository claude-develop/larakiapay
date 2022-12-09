<?php

namespace Larakiapay\Providers;

use Larakiapay\Larakiapay;
use Illuminate\Support\ServiceProvider;

class LarakiapayServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->mergeConfigFrom(__DIR__ .'/../../config/config.php', 'larakiapay');
    $this->app->bind('larakiapay', function ($app) {
      return new Larakiapay(
        config('larakiapay.public'),
        config('larakiapay.private'),
        config('larakiapay.secret'),
        config('larakiapay.env') == 'sandbox'
      );
    });
  }

  public function boot()
  {
    if ($this->app->runningInConsole()) {
      $this->publishes([
        __DIR__ . '/../../config/config.php' => config_path('larakiapay.php')
      ], 'larakiapay');
    }
  }
}
