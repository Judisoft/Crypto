<?php

namespace App\Providers;

use App\Models\Currencies;
use App\Models\Invoice;
use Illuminate\Support\Facades\DB;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @param $usd_xaf
     * @return void
     */
    public function boot()
    {
        $data=Currencies::all();
        $trade=Invoice::all();
        $exchange_rate = Currencies::all();
        view()->share('data',$data);
        view()->share('exchange_rate',$exchange_rate);
        view()->share('trade',$trade);
        //$with=with('data', $data);

        Schema::defaultStringLength(191);
    }
}
