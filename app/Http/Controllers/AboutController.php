<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about', [
            'title' => 'Tentang Kami | Creative Tech Agency',
            'description' => 'Pelajari lebih lanjut tentang layanan dan tim kami di Creative Tech Agency.',
            'keywords' => 'tentang kami, perusahaan, jasa profesional'
        ]);
    }
}
