<?php

namespace App\Http\Controllers;

use App\Models\Pricing;

class AnimationPricingController extends Controller
{
    public function index()
    {
        $packages = [
            [
                'title' => 'Basic Animation',
                'price' => '2.500.000',
                'duration' => '1 Minggu',
                'features' => [
                    '30 Detik Durasi',
                    '2D Animation',
                    'Basic Character Design',
                    'Background Music',
                    'Sound Effects',
                    '1x Revisi',
                    'Format MP4',
                    'HD Quality (720p)'
                ],
                'is_popular' => false,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Basic%20Animation'
            ],
            [
                'title' => 'Professional Animation',
                'price' => '5.000.000',
                'duration' => '2 Minggu',
                'features' => [
                    '60 Detik Durasi',
                    '2D/3D Animation',
                    'Custom Character Design',
                    'Voice Over',
                    'Premium Music',
                    '3x Revisi',
                    'Multiple Format',
                    'Full HD (1080p)'
                ],
                'is_popular' => true,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Professional%20Animation'
            ],
            [
                'title' => 'Premium Animation',
                'price' => '8.000.000',
                'duration' => '3 Minggu',
                'features' => [
                    '120 Detik Durasi',
                    'Advanced 3D Animation',
                    'Multiple Characters',
                    'Professional Voice Over',
                    'Custom Music Score',
                    'Unlimited Revisi',
                    'All Format Support',
                    '4K Quality'
                ],
                'is_popular' => false,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Premium%20Animation'
            ]
        ];

        return view('pricing.animation', compact('packages'));
    }
} 