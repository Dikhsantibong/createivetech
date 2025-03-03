<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show($type)
    {
        $details = [
            'uiux' => [
                'title' => 'UI/UX Design',
                'description' => 'Innovative and user-friendly designs that enhance user experience and engagement.',
                'image' => 'landing-page/img/about.png'
            ],
            'video-editing' => [
                'title' => 'Video Editing',
                'description' => 'Professional video editing services to create compelling and high-quality videos.',
                'videos' => [
                    'https://www.youtube.com/embed/GahKxn9I-lg',
                    'https://www.youtube.com/embed/VDJlHAq0KR0',
                    'https://www.youtube.com/embed/YccVDnFCzRY'
                ]
            ],
            'web-development' => [
                'title' => 'Web Development',
                'description' => 'Custom web solutions developed with the latest technologies to boost your online presence.',
                'image' => 'landing-page/img/about.png'
            ]
        ];

        if (!array_key_exists($type, $details)) {
            abort(404);
        }

        return view('portfolio.detail', ['detail' => $details[$type]]);
    }
}
