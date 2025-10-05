@php
    $seo = \App\Services\SeoService::getCurrentPageMetadata();
@endphp

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $seo->title ?? ($title ?? config('app.name')) }}</title>

<!-- Primary Meta Tags -->
@if ($seo->description)
    <meta name="description" content="{{ $seo->description }}">
@endif
@if ($seo->keywords)
    <meta name="keywords" content="{{ $seo->keywords }}">
@endif
@if ($seo->author)
    <meta name="author" content="{{ $seo->author }}">
@endif
<meta name="robots" content="{{ $seo->robots }}">
<meta name="language" content="{{ $seo->language }}">
@if ($seo->geo_region)
    <meta name="geo.region" content="{{ $seo->geo_region }}">
@endif
@if ($seo->geo_placename)
    <meta name="geo.placename" content="{{ $seo->geo_placename }}">
@endif

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $seo->og_type }}">
<meta property="og:url" content="{{ url()->current() }}">
@if ($seo->og_title)
    <meta property="og:title" content="{{ $seo->og_title }}">
@endif
@if ($seo->og_description)
    <meta property="og:description" content="{{ $seo->og_description }}">
@endif
@if ($seo->og_image)
    <meta property="og:image" content="{{ asset($seo->og_image) }}">
@endif
@if ($seo->og_site_name)
    <meta property="og:site_name" content="{{ $seo->og_site_name }}">
@endif
<meta property="og:locale" content="{{ $seo->og_locale }}">

<!-- Twitter -->
<meta property="twitter:card" content="{{ $seo->twitter_card }}">
<meta property="twitter:url" content="{{ url()->current() }}">
@if ($seo->twitter_title)
    <meta property="twitter:title" content="{{ $seo->twitter_title }}">
@endif
@if ($seo->twitter_description)
    <meta property="twitter:description" content="{{ $seo->twitter_description }}">
@endif
@if ($seo->twitter_image)
    <meta property="twitter:image" content="{{ asset($seo->twitter_image) }}">
@endif
@if ($seo->twitter_site)
    <meta property="twitter:site" content="{{ $seo->twitter_site }}">
@endif

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}" />

<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
<link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

<style>
    @font-face {
        font-family: 'CenturyGothic';
        src: url("{{ asset('fonts/CenturyGothicPaneuropeanRegular.ttf') }}") format('truetype');
        font-style: normal;
    }

    @font-face {
        font-family: 'CenturyGothicBold';
        src: url("{{ asset('fonts/century-gothic-bold.ttf') }}") format('truetype');
        font-style: normal;
    }

    @font-face {
        font-family: 'Now';
        src: url("{{ asset('fonts/now.regular.otf') }}") format('truetype');
        font-style: normal;
    }
</style>

@vite(['resources/css/app.css', 'resources/js/app.js'])

@fluxAppearance
