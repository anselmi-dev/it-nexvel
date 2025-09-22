<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<!-- Primary Meta Tags -->
<meta name="description" content="IT NEXVEL - Líder en soluciones tecnológicas en Chile. Especialistas en infraestructura IT, desarrollo de software, ciberseguridad, domótica y transformación digital. Consultoría tecnológica de alto impacto para empresas.">
<meta name="keywords" content="soluciones tecnológicas Chile, desarrollo software Santiago, ciberseguridad empresas, infraestructura IT Chile, consultoría tecnológica, transformación digital, automatización industrial, redes informáticas, telecomunicaciones, marketing digital, outsourcing IT, formación tecnológica, domótica, inmótica, energía renovable">
<meta name="author" content="IT NEXVEL">
<meta name="robots" content="index, follow">
<meta name="language" content="es">
<meta name="geo.region" content="CL">
<meta name="geo.placename" content="Chile">
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="IT NEXVEL - Líder en Soluciones Tecnológicas Chile">
<meta property="og:description" content="Especialistas en infraestructura IT, desarrollo de software, ciberseguridad y transformación digital. Conectamos innovación, eficiencia y sostenibilidad para empresas en Chile.">
<meta property="og:image" content="{{ asset('images/logo.png') }}">
<meta property="og:site_name" content="IT NEXVEL">
<meta property="og:locale" content="es_CL">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="IT NEXVEL - Soluciones Tecnológicas Chile">
<meta property="twitter:description" content="Líder en infraestructura IT, desarrollo de software y ciberseguridad. Transformamos empresas con tecnología innovadora y sostenible.">
<meta property="twitter:image" content="{{ asset('images/logo.png') }}">
<meta property="twitter:site" content="@itnexvel">

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

<!-- Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "IT NEXVEL",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('images/logo.png') }}",
  "description": "Empresa líder en soluciones tecnológicas en Chile. Especialistas en infraestructura IT, desarrollo de software, ciberseguridad y transformación digital.",
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "CL",
    "addressRegion": "Metropolitana"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+56-9-1234-5678",
    "contactType": "customer service",
    "email": "contacto@itnexvel.com"
  },
  "sameAs": [
    "https://linkedin.com/company/it-nexvel",
    "https://x.com/itnexvel",
    "https://www.instagram.com/itnexvel/"
  ],
  "foundingDate": "2020",
  "numberOfEmployees": "10-50",
  "areaServed": "Chile",
  "serviceType": [
    "Infraestructura Tecnológica",
    "Desarrollo de Software",
    "Ciberseguridad",
    "Consultoría Tecnológica",
    "Transformación Digital",
    "Domótica e Inmótica",
    "Marketing Digital",
    "Formación Tecnológica"
  ]
}
</script>

@fluxAppearance
