<?php

namespace App\Http\Controllers;

use App\Models\Pricing;

class WebAppsPricingController extends Controller
{
    public function index()
    {
        $packages = [
            [
                'title' => 'Basic Website',
                'price' => '3.000.000',
                'duration' => '1 Bulan',
                'features' => [
                    'Landing Page',
                    'Responsive Design',
                    'Basic SEO',
                    'Contact Form',
                    '1 Email Account',
                    'Free Domain .com',
                    'Free Hosting 1 Tahun',
                    'Free SSL Certificate'
                ],
                'is_popular' => false,
                'button_text' => 'Konsultasi via WhatsApp',
                'button_link' => 'https://wa.me/6282293118410?text=Halo%20CreativeTech%20Agency%2C%0A%0ASaya%20tertarik%20dengan%20paket%20Basic%20Website%20dengan%20harga%20Rp%203.000.000.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih.'
            ],
            [
                'title' => 'Business Website',
                'price' => '5.000.000',
                'duration' => '2 Bulan',
                'features' => [
                    'Semua fitur Basic +',
                    '5 Halaman Website',
                    'Blog System',
                    'Advanced SEO',
                    '5 Email Account',
                    'Social Media Integration',
                    'Google Analytics',
                    'Maintenance 3 Bulan'
                ],
                'is_popular' => true,
                'button_text' => 'Konsultasi via WhatsApp',
                'button_link' => 'https://wa.me/6282293118410?text=Halo%20CreativeTech%20Agency%2C%0A%0ASaya%20tertarik%20dengan%20paket%20Business%20Website%20dengan%20harga%20Rp%205.000.000.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih.'
            ],
            [
                'title' => 'E-Commerce Website',
                'price' => '8.000.000',
                'duration' => '3 Bulan',
                'features' => [
                    'Semua fitur Business +',
                    'Unlimited Products',
                    'Payment Gateway',
                    'Order Management',
                    'Customer Dashboard',
                    'Inventory System',
                    'Sales Report',
                    'Maintenance 6 Bulan'
                ],
                'is_popular' => false,
                'button_text' => 'Konsultasi via WhatsApp',
                'button_link' => 'https://wa.me/6282293118410?text=Halo%20CreativeTech%20Agency%2C%0A%0ASaya%20tertarik%20dengan%20paket%20E-Commerce%20Website%20dengan%20harga%20Rp%208.000.000.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih.'
            ]
        ];

        return view('pricing.web-apps', compact('packages'));
    }
} 