<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function mobile()
    {
        return view('service.mobile');
    }

    public function consulting()
    {
        return view('service.consulting');
    }

    public function branding()
    {
        return view('service.branding');
    }

    public function animasi()
    {
        return view('service.animasi');
    }

    public function editing()
    {
        return view('service.animasi');
    }

    public function desain()
     {
        return view('service.design');
    }
}
