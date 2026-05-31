<?php

namespace App\Http\Controllers\Frontend;

class HomeController
{
    public function __invoke()
    {
        return view('frontend.home');
    }
}