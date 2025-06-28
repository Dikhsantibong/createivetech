@props([
    'title' => config('seo.default.title'),
    'description' => config('seo.default.description'),
    'keywords' => config('seo.default.keywords'),
    'author' => config('seo.default.author'),
    'canonical' => config('seo.default.canonical'),
    'ogTitle' => config('seo.default.og.title'),
    'ogDescription' => config('seo.default.og.description'),
    'ogType' => config('seo.default.og.type'),
    'ogUrl' => config('seo.default.og.url'),
    'ogSiteName' => config('seo.default.og.site_name'),
    'ogImage' => config('seo.default.og.image'),
    'twitterCard' => config('seo.default.twitter.card'),
    'twitterSite' => config('seo.default.twitter.site'),
    'twitterTitle' => config('seo.default.twitter.title'),
    'twitterDescription' => config('seo.default.twitter.description'),
    'twitterImage' => config('seo.default.twitter.image'),
])

<!-- Primary Meta Tags -->
<title>{{ $title }}</title>
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="author" content="{{ $author }}">
<link rel="canonical" href="{{ $canonical }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:url" content="{{ $ogUrl }}">
<meta property="og:title" content="{{ $ogTitle }}">
<meta property="og:description" content="{{ $ogDescription }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:site_name" content="{{ $ogSiteName }}">

<!-- Twitter -->
<meta property="twitter:card" content="{{ $twitterCard }}">
<meta property="twitter:site" content="{{ $twitterSite }}">
<meta property="twitter:title" content="{{ $twitterTitle }}">
<meta property="twitter:description" content="{{ $twitterDescription }}">
<meta property="twitter:image" content="{{ $twitterImage }}">

<!-- Additional SEO Tags -->
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="theme-color" content="#8BBEFF">
<meta name="msapplication-TileColor" content="#8BBEFF">

<!-- Structured Data / Schema.org -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "CreativeTech Agency",
    "description": "{{ $description }}",
    "url": "{{ $canonical }}",
    "logo": "{{ $ogImage }}",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Kendari",
        "addressRegion": "Sulawesi Tenggara",
        "addressCountry": "ID"
    },
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+62-822-9311-8410",
        "contactType": "customer service"
    },
    "sameAs": [
        "https://facebook.com/creativetechid",
        "https://twitter.com/creativetechid",
        "https://www.instagram.com/ctech.agency",
        "https://linkedin.com/company/creativetechid"
    ]
}
</script>
