<?php

return [
    'default' => [
        'title' => 'CreativeTech Agency - Solusi Digital Kreatif & Teknologi',
        'description' => 'CreativeTech Agency menyediakan layanan pengembangan web, aplikasi mobile, desain grafis, digital marketing, video editing dan animasi 2D/3D di Kendari, Sulawesi Tenggara',
        'keywords' => 'jasa website kendari, digital marketing kendari, desain grafis sulawesi tenggara, video editing kendari, pengembangan aplikasi sultra, creative agency kendari',
        'author' => 'CreativeTech Agency',
        'canonical' => env('APP_URL'),
        'og' => [
            'title' => 'CreativeTech Agency - Solusi Digital Kreatif & Teknologi',
            'description' => 'Layanan pembuatan website, aplikasi, desain grafis, digital marketing profesional di Kendari',
            'type' => 'website',
            'url' => env('APP_URL'),
            'site_name' => 'CreativeTech Agency',
            'image' => env('APP_URL').'/assets/img/hero-bg.png',
        ],
        'twitter' => [
            'card' => 'summary_large_image',
            'site' => '@creativetechid',
            'title' => 'CreativeTech Agency - Solusi Digital Kreatif',
            'description' => 'Layanan digital kreatif profesional di Kendari',
            'image' => env('APP_URL').'/assets/img/hero-bg.png',
        ]
    ]
]; 