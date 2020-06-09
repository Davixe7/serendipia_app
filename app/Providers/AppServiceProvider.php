<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
  /**
  * Register any application services.
  *
  * @return void
  */
  public function register()
  {
    Schema::defaultStringLength(191);
  }
  
  /**
  * Bootstrap any application services.
  *
  * @return void
  */
  public function boot()
  {
    setlocale(LC_ALL, 'es_ES');
    $public_path = public_path();
    app()->bind('path.public', function() use ($public_path){
      return env('PUBLIC_PATH', $public_path);
    });
  }
}
