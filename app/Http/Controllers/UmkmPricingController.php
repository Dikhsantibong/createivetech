<?php

namespace App\Http\Controllers;

use App\Models\Pricing;

class UmkmPricingController extends Controller
{
    public function index()
    {
        $packages = [
            [
                'title' => 'Starter UMKM',
                'price' => '999.000',
                'duration' => '1 Minggu',
                'features' => [
                    'Landing Page Website',
                    'Basic SEO',
                    'WhatsApp Integration',
                    'Social Media Setup',
                    'Logo Design',
                    'Business Card',
                    'Free Domain .my.id',
                    'Free Hosting 6 Bulan'
                ],
                'is_popular' => false,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Starter%20UMKM'
            ],
            [
                'title' => 'Growth UMKM',
                'price' => '1.999.000',
                'duration' => '2 Minggu',
                'features' => [
                    'Website 3 Halaman',
                    'Advanced SEO',
                    'Social Media Management',
                    'Basic Digital Marketing',
                    'Full Brand Identity',
                    'Marketing Materials',
                    'Free Domain .com',
                    'Free Hosting 1 Tahun'
                ],
                'is_popular' => true,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Growth%20UMKM'
            ],
            [
                'title' => 'Scale UMKM',
                'price' => '2.999.000',
                'duration' => '3 Minggu',
                'features' => [
                    'E-Commerce Website',
                    'Full Digital Marketing',
                    'Content Creation',
                    'Paid Advertising',
                    'Business Consulting',
                    'Training Session',
                    'Free Domain & SSL',
                    'Free Hosting 2 Tahun'
                ],
                'is_popular' => false,
                'button_text' => 'Pilih Paket',
                'button_link' => 'https://wa.me/6282346970595?text=Saya%20tertarik%20dengan%20paket%20Scale%20UMKM'
            ]
        ];

        return view('pricing.umkm', compact('packages'));
    }
} 