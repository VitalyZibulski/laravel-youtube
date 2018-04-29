<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    	if(!Auth::check()){
			view()->composer('layouts.partials._navigation',function($view){
				$view->with('channel', Auth::user()->channel->first() );
			});
		}

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
