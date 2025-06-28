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
                'button_text' => 'Konsultasi via WhatsApp',
                'button_link' => 'https://wa.me/6282293118410?text=Halo%20CreativeTech%20Agency%2C%0A%0ASaya%20tertarik%20dengan%20paket%20Basic%20Video%20dengan%20harga%20Rp%201.500.000.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih.'
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
                'button_text' => 'Konsultasi via WhatsApp',
                'button_link' => 'https://wa.me/6282293118410?text=Halo%20CreativeTech%20Agency%2C%0A%0ASaya%20tertarik%20dengan%20paket%20Professional%20Video%20dengan%20harga%20Rp%203.000.000.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih.'
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
                'button_text' => 'Konsultasi via WhatsApp',
                'button_link' => 'https://wa.me/6282293118410?text=Halo%20CreativeTech%20Agency%2C%0A%0ASaya%20tertarik%20dengan%20paket%20Premium%20Video%20dengan%20harga%20Rp%205.000.000.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih.'
            ]
        ];

        return view(
            'pricing.video-editing',
            [
                'title' => 'Video Editing Pricing',
                'description' => 'Pilih paket yang sesuai dengan kebutuhan Anda',
                'keywords' => 'Video Editing Pricing, Video Editing Packages, Video Editing Services, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing, Video Editing Rates, Video Editing Prices, Video Editing Packages, Video Editing Pricing',
                'packages' => $packages
            ]
        );
    }
}
