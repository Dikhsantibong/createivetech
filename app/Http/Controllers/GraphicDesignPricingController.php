<?php

namespace App\Http\Controllers;

use App\Models\Pricing;

class GraphicDesignPricingController extends Controller
{
    public function index()
    {
        $packages = [
            [
                'title' => 'Basic Design',
                'price' => '1.000.000',
                'duration' => '3 Hari',
                'features' => [
                    'Logo Design',
                    'Business Card',
                    'Social Media Kit',
                    'Basic Branding',
                    '2x Revisi',
                    'Source File',
                    'High Resolution',
                    'Commercial Use'
                ],
                'is_popular' => false,
                'button_text' => 'Konsultasi via WhatsApp',
                'button_link' => 'https://wa.me/6282293118410?text=Halo%20CreativeTech%20Agency%2C%0A%0ASaya%20tertarik%20dengan%20paket%20Basic%20Design%20dengan%20harga%20Rp%201.000.000.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih.'
            ],
            [
                'title' => 'Business Design',
                'price' => '2.500.000',
                'duration' => '5 Hari',
                'features' => [
                    'Full Brand Identity',
                    'Marketing Materials',
                    'Packaging Design',
                    'Print Ready Files',
                    '5x Revisi',
                    'All Source Files',
                    'Brand Guidelines',
                    'Priority Support'
                ],
                'is_popular' => true,
                'button_text' => 'Konsultasi via WhatsApp',
                'button_link' => 'https://wa.me/6282293118410?text=Halo%20CreativeTech%20Agency%2C%0A%0ASaya%20tertarik%20dengan%20paket%20Business%20Design%20dengan%20harga%20Rp%202.500.000.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih.'
            ],
            [
                'title' => 'Premium Design',
                'price' => '5.000.000',
                'duration' => '7 Hari',
                'features' => [
                    'Custom Illustration',
                    'Motion Graphics',
                    'UI/UX Design',
                    'Full Brand Strategy',
                    'Unlimited Revisi',
                    'All Format Files',
                    'Training Session',
                    'Dedicated Designer'
                ],
                'is_popular' => false,
                'button_text' => 'Konsultasi via WhatsApp',
                'button_link' => 'https://wa.me/6282293118410?text=Halo%20CreativeTech%20Agency%2C%0A%0ASaya%20tertarik%20dengan%20paket%20Premium%20Design%20dengan%20harga%20Rp%205.000.000.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih.'
            ]
        ];
        return view('pricing.graphic-design', [
            'title' => 'Pricing - Graphic Design',
            'description' => 'Pilih paket desain grafis yang sesuai dengan kebutuhan bisnis Anda.',
            'keywords' => 'Pricing, Graphic Design, Design, Creative, Agency',
            'packages' => $packages
        ]);
    }
}
