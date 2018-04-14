<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevArtisanClearCacheController extends Controller
{
	public function cache_routes()
    {
       \Artisan::call('route:cache');
       return redirect()->back()->with('message','Routes cached!');
    }

    public function cache_config()
    {
       \Artisan::call('config:cache');
       return redirect()->back()->with('message','Config cached!');
    }

    public function clear_views()
    {
       \Artisan::call('view:clear');
       return redirect()->back()->with('message','Views cache Cleared!');
    }

    public function clear_routes()
    {
       \Artisan::call('route:clear');
       return redirect()->back()->with('message','Route cache Cleared!');
    }

    public function clear_config()
    {
       \Artisan::call('config:clear');
       return redirect()->back()->with('message','Config cache Cleared!');
    }

    public function clear_cache()
    {
        \Artisan::call('cache:clear');
        return redirect()->back()->with('message','Cache Cleared!');
    }
}
