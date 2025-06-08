<?php

namespace App\Http\Controllers;

use App\Models\Pricing;

class DigitalMarketingPricingController extends Controller
{
    public function index()
    {
        $packages = [
            [
                'title' => 'Basic Marketing',
                'price' => '2.000.000',
                'duration' => '1 Bulan',
                'features' => [
                    'Social Media Management',
                    '12 Post/Bulan',
                    'Basic Content Strategy',
                    'Community Management',
                    '2 Platform',
                    'Monthly Report',
                    'Basic Analytics',
                    'WhatsApp Support'
                ],
                'is_popular' => false,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Basic%20Marketing'
            ],
            [
                'title' => 'Business Marketing',
                'price' => '4.000.000',
                'duration' => '1 Bulan',
                'features' => [
                    'Advanced Social Media',
                    '24 Post/Bulan',
                    'Content Calendar',
                    'Paid Advertising',
                    '4 Platform',
                    'Weekly Report',
                    'Advanced Analytics',
                    '24/7 Support'
                ],
                'is_popular' => true,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Business%20Marketing'
            ],
            [
                'title' => 'Premium Marketing',
                'price' => '7.000.000',
                'duration' => '1 Bulan',
                'features' => [
                    'Full Digital Marketing',
                    'Unlimited Posts',
                    'SEO Optimization',
                    'Email Marketing',
                    'All Platform',
                    'Daily Report',
                    'Custom Analytics',
                    'Dedicated Manager'
                ],
                'is_popular' => false,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Premium%20Marketing'
            ]
        ];

        return view('pricing.digital-marketing', compact('packages'));
    }
} 