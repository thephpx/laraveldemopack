<?php

namespace Thephpx\providers;

use Illuminate\Support\ServiceProvider;

class LaraveldemopackServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
    	require __DIR__ . '/../routes/route.php';
    }
}