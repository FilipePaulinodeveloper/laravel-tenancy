<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index($subdomain, Store $store)
    {
        $store = Store::whereSubdomain($subdomain)
            ->with('products')
            ->first();
            
        return view('front.home', compact('store'));
        
    }
}
