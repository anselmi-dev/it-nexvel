<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<!-- Primary Meta Tags -->
<meta name="description" content="IT NEXVEL ofrece soluciones tecnológicas integrales en infraestructura, desarrollo de software, ciberseguridad y más. Conectamos innovación, eficiencia y sostenibilidad.">
<meta name="keywords" content="soluciones tecnológicas, desarrollo de software, ciberseguridad, infraestructura IT, consultoría tecnológica, transformación digital, automatización, redes, telecomunicaciones, marketing digital, outsourcing IT, formación tecnológica">
<meta name="author" content="IT NEXVEL">
<meta name="robots" content="index, follow">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="IT NEXVEL - Soluciones Tecnológicas Innovadoras">
<meta property="og:description" content="Ofrecemos soluciones tecnológicas integrales que conectan innovación, eficiencia y sostenibilidad para impulsar el crecimiento de tu negocio.">
<meta property="og:image" content="{{ asset('images/logo.png') }}">
<meta property="og:site_name" content="IT NEXVEL">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="IT NEXVEL - Soluciones Tecnológicas Innovadoras">
<meta property="twitter:description" content="Descubre nuestras soluciones tecnológicas integrales para impulsar el crecimiento de tu negocio con innovación y eficiencia.">
<meta property="twitter:image" content="{{ asset('images/logo.png') }}">

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}" />

<link rel="icon" href="/favicon.ico" sizes="any">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">

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
{{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> --}}
{{-- <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
<script src="https://cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll@v1.0/oyethemes_onscroll_animation.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/shishirraven/animate-on-scroll@v1.2/animation_utility.css"> --}}

<link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script src="{{ asset('particles.js-master/particles.js-master/particles.js') }}"></script>

@vite(['resources/css/app.css', 'resources/js/app.js'])

@fluxAppearance
