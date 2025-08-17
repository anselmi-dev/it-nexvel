<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800 flex flex-col">
    {{-- <div id="particles-js" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; overflow: hidden;"></div> --}}
    {{-- <x-layouts.app.navbar /> --}}

    <div class="flex-1">{{ $slot }}</div>

    {{-- <x-layouts.app.footer /> --}}
    @fluxScripts

    <script>
        AOS.init();
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> --}}
    {{-- <script src="{{ asset('particles.js-master/particles.js-master/particles.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('particles.js-master/particles.js-master/stats.js') }}"></script> --}}

    <script>
        // particlesJS("particles-js", {
        //     "particles": {
        //         "number": {
        //             "value": 20,
        //             "density": {
        //                 "enable": true,
        //                 "value_area": 1443.0708547789707
        //             }
        //         },
        //         "color": {
        //             "value": "#ebebeb"
        //         },
        //         "shape": {
        //             "type": "circle",
        //             "stroke": {
        //                 "width": 0,
        //                 "color": "#000000"
        //             },
        //             "polygon": {
        //                 "nb_sides": 5
        //             },
        //             "image": {
        //                 "src": "img/github.svg",
        //                 "width": 100,
        //                 "height": 100
        //             }
        //         },
        //         "opacity": {
        //             "value": 0.2,
        //             "random": false,
        //             "anim": {
        //                 "enable": false,
        //                 "speed": 1,
        //                 "opacity_min": 0.1,
        //                 "sync": false
        //             }
        //         },
        //         "size": {
        //             "value": 20,
        //             "random": true,
        //             "anim": {
        //                 "enable": false,
        //                 "speed": 40,
        //                 "size_min": 0.1,
        //                 "sync": false
        //             }
        //         },
        //         "line_linked": {
        //             "enable": true,
        //             "distance": 150,
        //             "color": "#000",
        //             "opacity": 0.4,
        //             "width": 1
        //         },
        //         "move": {
        //             "enable": true,
        //             "speed": 6,
        //             "direction": "none",
        //             "random": false,
        //             "straight": false,
        //             "out_mode": "out",
        //             "bounce": false,
        //             "attract": {
        //                 "enable": false,
        //                 "rotateX": 600,
        //                 "rotateY": 1200
        //             }
        //         }
        //     },
        //     "interactivity": {
        //         "detect_on": "canvas",
        //         "events": {
        //             "onhover": {
        //                 "enable": true,
        //                 "mode": "repulse"
        //             },
        //             "onclick": {
        //                 "enable": true,
        //                 "mode": "push"
        //             },
        //             "resize": true
        //         },
        //         "modes": {
        //             "grab": {
        //                 "distance": 400,
        //                 "line_linked": {
        //                     "opacity": 1
        //                 }
        //             },
        //             "bubble": {
        //                 "distance": 400,
        //                 "size": 40,
        //                 "duration": 2,
        //                 "opacity": 8,
        //                 "speed": 3
        //             },
        //             "repulse": {
        //                 "distance": 200,
        //                 "duration": 0.4
        //             },
        //             "push": {
        //                 "particles_nb": 4
        //             },
        //             "remove": {
        //                 "particles_nb": 2
        //             }
        //         }
        //     },
        //     "retina_detect": true
        // });
    </script>
</body>

</html>
