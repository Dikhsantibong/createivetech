<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function webApps()
    {
        return view('pricing.web-apps');
    }

    public function animation()
    {
        return view('pricing.animation');
    }

    public function videoEditing()
    {
        return view('pricing.video-editing');
    }

    public function digitalMarketing()
    {
        return view('pricing.digital-marketing');
    }

    public function graphicDesign()
    {
        return view('pricing.graphic-design');
    }

    public function umkm()
    {
        return view('pricing.umkm');
    }
} 