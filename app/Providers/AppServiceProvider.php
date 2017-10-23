<?php

namespace App\Providers;
use Illuminate\Support\Facades\Log;
use App\Senders\CustomSender;
use Illuminate\Support\ServiceProvider;


class LaravelLoggerProxy {
    public function log( $msg ) {
        Log::info($msg);
    }
}


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $pusher = $this->app->make('pusher');
        $pusher->set_logger( new LaravelLoggerProxy() );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app('notifynder')->extend('sendCustom', function (array $notifications) {
            return new CustomSender($notifications);
        });
    }
}
