<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use GuzzleHttp\Client;

class NominationClientServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('nomination.client', function () {
            $config = [
                'base_uri' => env('NOMINETION_API'),
                'headers' => [
                    'Authorization' => 'Bearer ' . env('NOMINETION_API_KEY')
                ]
            ];
            return new Client($config);
        });
    }
}
