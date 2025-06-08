<?php

namespace App\Http\Controllers;

use App\Models\Pricing;

class VideoEditingPricingController extends Controller
{
    public function index()
    {
        $packages = [
            [
                'title' => 'Basic Video',
                'price' => '1.500.000',
                'duration' => '3 Hari',
                'features' => [
                    '5 Menit Durasi',
                    'Basic Editing',
                    'Text & Titles',
                    'Background Music',
                    'Basic Transitions',
                    '1x Revisi',
                    'Format MP4',
                    'HD Quality (720p)'
                ],
                'is_popular' => false,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Basic%20Video'
            ],
            [
                'title' => 'Professional Video',
                'price' => '3.000.000',
                'duration' => '5 Hari',
                'features' => [
                    '10 Menit Durasi',
                    'Advanced Editing',
                    'Motion Graphics',
                    'Voice Over',
                    'Premium Music',
                    '3x Revisi',
                    'Multiple Format',
                    'Full HD (1080p)'
                ],
                'is_popular' => true,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Professional%20Video'
            ],
            [
                'title' => 'Premium Video',
                'price' => '5.000.000',
                'duration' => '7 Hari',
                'features' => [
                    '15 Menit Durasi',
                    'Color Grading',
                    'Advanced Effects',
                    'Professional Voice Over',
                    'Custom Music',
                    'Unlimited Revisi',
                    'All Format Support',
                    '4K Quality'
                ],
                'is_popular' => false,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Premium%20Video'
            ]
        ];

        return view('pricing.video-editing', compact('packages'));
    }
} 