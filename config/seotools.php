<?php

return [

    // Tidak menggunakan Inertia
    'inertia' => false,

    'meta' => [
        'defaults' => [
            'title'        => 'CreativeTech',
            'titleBefore'  => false,
            'description'  => 'CreativeTech adalah agency digital profesional untuk animasi, web, dan branding.',
            'separator'    => ' | ',
            'keywords'     => [
                'agency digital',
                'jasa animasi',
                'jasa website ',
                'jasa aplikasi',
                'jasa desain grafis',
                'jasa digital marketing',
                'jasa video editing',
                'jasa animasi 2D',
                'jasa animasi 3D',
                'jasa branding',
                'jasa SEO',
                'video editing',
                'branding',
            ],
            'canonical'    => 'current',
            'robots'       => 'index,follow',
        ],

        'webmaster_tags' => [
            'google' => env('GOOGLE_SITE_VERIFICATION'),
        ],
    ],

    'opengraph' => [
        'defaults' => [
            'title'       => 'CreativeTech',
            'description' => 'Agency digital kreatif profesional.',
            'url'         => null,
            'type'        => 'website',
            'site_name'   => 'CreativeTech',
            'images'      => [
                env('APP_URL') . '/assets/img/seo/default-og.jpg',
            ],
        ],
    ],

    'twitter' => [
        'defaults' => [
            'card' => 'summary_large_image',
        ],
    ],

    'json-ld' => [
        'defaults' => [
            'title'       => 'CreativeTech',
            'description' => 'Agency digital kreatif profesional.',
            'url'         => null,
            'type'        => 'WebSite',
            'images'      => [
                env('APP_URL') . '/assets/img/seo/default-og.jpg',
            ],
        ],
    ],

];
