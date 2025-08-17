<x-layouts.guest :title="__('IT NEXVEL')">

    {{-- <section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply"> --}}
    <section
        class="bg-center bg-no-repeat bg-cover relative overflow-hidden _bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-white bg-blend-multiply p-3 md:px-6 lg:px-4">
        {{-- <x-layouts.app.bg class="absolute top-0 w-full z-0" /> --}}

        <div class="px-4 mx-auto max-w-screen-xl py-24 lg:py-56">
            {{-- <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Tecnología inteligente para un mundo en evolución
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
                Conectamos innovación, ingeniería y experiencia para transformar tu entorno tecnológico
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    <span class="uppercase">Contactanos</span>
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div> --}}

            <div class="mx-auto max-w-2xl lg:max-w-none">
                <div class="max-w-3xl slideInUp scrollanimation animated fadeInUp" data-aos="fade-up">
                    <h1
                        class="font-display text-5xl font-medium tracking-tight text-balance text-primary-800 sm:text-7xl">
                        Tecnología inteligente para un mundo en evolución.</h1>
                    <p class="mt-6 text-xl lg:text-3xl text-primary-600">En IT NEXVEL ofrecemos un portafolio completo de
                        servicios especializados en ingeniería, tecnología y transformación digital.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Icon Blocks -->
    <div class="max-w-screen-xl px-3 md:px-6 lg:px-4 mx-auto lg:my-32 flex flex-col space-y-24">
        <x-layouts.title-section title="Nuestros servicios"
            description="En IT NEXVEL ofrecemos un portafolio completo de servicios especializados en ingeniería, tecnología y transformación digital." />

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-12">
            <x-card-service title="Infraestructura tecnológica"
                description="Diseño, gestión e implementación de redes informáticas y telecomunicaciones.">
                <x-slot name="icon">
                    <x-icons.infrastructure class="shrink-0 size-9 text-gray-800 dark:text-white" />
                </x-slot>
            </x-card-service>
            <x-card-service title="Computación en la nube y ciberseguridad"
                description="Migración, seguridad y administración de servicios en la nube.">
                <x-slot name="icon">
                    <x-icons.cloud class="shrink-0 size-9 text-gray-800 dark:text-white" />
                </x-slot>
            </x-card-service>
            <x-card-service title="Desarrollo y presencia digital"
                description="Desarrollo de sistemas de información y aplicaciones web y móviles.">
                <x-slot name="icon">
                    <x-icons.code class="shrink-0 size-9 text-gray-800 dark:text-white" />
                </x-slot>
            </x-card-service>
            <x-card-service title="Energías renovables"
                description="Diseño, instalación y mantenimiento de sistemas energéticos sostenibles.">
                <x-slot name="icon">
                    <x-icons.energies class="shrink-0 size-9 text-gray-800 dark:text-white" />
                </x-slot>
            </x-card-service>
            <x-card-service title="Consultoría y soporte técnico"
                description="Asesoría y soporte técnico en proyectos tecnológicos y transformación digital.">
                <x-slot name="icon">
                    <x-icons.support class="shrink-0 size-9 text-gray-800 dark:text-white" />
                </x-slot>
            </x-card-service>
            <x-card-service title="Capacitación especializada"
                description="Cursos y talleres en redes, servidores, ciberseguridad y más.">
                <x-slot name="icon">
                    <x-icons.training class="shrink-0 size-9 text-gray-800 dark:text-white" />
                </x-slot>
            </x-card-service>
            <x-card-service title="Comercialización de tecnología"
                description="Venta y distribución de equipos informáticos, electrónicos y de telecomunicaciones.">
                <x-slot name="icon">
                    <x-icons.commercialization class="shrink-0 size-9 text-gray-800 dark:text-white" />
                </x-slot>
            </x-card-service>
            <x-card-service title="Outsourcing tecnológico"
                description="Externalización de talento humano especializado en tecnologías de la información.">
                <x-slot name="icon">
                    <x-icons.outsourcing class="shrink-0 size-9 text-gray-800 dark:text-white" />
                </x-slot>
            </x-card-service>
        </div>
    </div>
    <!-- End Icon Blocks -->

    <div class="bg-gradient-to-r from-primary-500 via-primary-600 to-secondary-500 py-20 px-6 max-w-full px-4 py-10 sm:px-6 lg:px-8 lg:my-32 mx-auto">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-white mb-6 uppercase">Lorem ipsum</h2>
            <p class="text-lg text-white mb-12">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur rem accusantium eos sapiente? Aliquam laboriosam numquam modi vero nesciunt fugit maxime assumenda, ullam debitis totam animi atque, quod molestias sapiente.</p>
            <a href="{{ route('about') }}" class="bg-white text-primary-500 hover:bg-primary-500 hover:text-white py-3 px-8 text-lg font-medium transition duration-300 hover:shadow-lg uppercase">
                Conocenos
            </a>
        </div>
    </div>

    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:my-32 mx-auto">
        <!-- Title -->
        <div class="mx-auto max-w-2xl mb-8 lg:mb-14 text-center animate__animated animate__fadeIn" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-neutral-200">
                Nuestra propuesta de valor
            </h2>
            <p class="mt-3 text-gray-800 dark:text-neutral-200 animate__animated animate__fadeIn">
                En IT NEXVEL, creemos en la transformación digital como una herramienta clave para impulsar el
                crecimiento y la competitividad de las empresas. Ofrecemos una gama completa de servicios tecnológicos
                que van desde la infraestructura tecnológica hasta la innovación y la ciberseguridad, pasando por el
                desarrollo de software y la presencia digital.
            </p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="mx-auto max-w-screen-xl grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">
            <!-- Icon Block -->
            <div class="text-center group" data-aos="fade-up">
                <div
                    class="relative w-fit mx-auto group-hover:scale-120 group-hover:translate-x-0 group-hover:translate-y-0 transition ease-in-out">
                    <span
                        class="absolute w-12 inset-0 bg-secondary-400/40 rounded-l-xl rounded-r-lg z-0 -top-2 -right-2"></span>
                    <span class="absolute w-12 inset-0 bg-secondary-400/50 rounded-xl z-0 top-2 left-2"></span>
                    <div class="z-10 relative">
                        <svg class="shrink-0 size-7 lg:size-14 md:size-9 mx-auto text-gray-700 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M11.445 20.913a1.665 1.665 0 0 1 -1.12 -1.23a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.31 .318 1.643 1.79 .997 2.694">
                            </path>
                            <path d="M15 19l2 2l4 -4"></path>
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        </svg>
                    </div>
                </div>

                <div class="mt-2 sm:mt-6">
                    <h3 class="sm:text-lg font-semibold text-gray-600">
                        Soluciones personalizadas y escalables
                    </h3>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div class="text-center group" data-aos="fade-up">
                <div
                    class="relative w-fit mx-auto group-hover:scale-120 group-hover:translate-x-0 group-hover:translate-y-0 transition ease-in-out">
                    <span
                        class="absolute w-12 inset-0 bg-secondary-400/40 rounded-l-xl rounded-r-lg z-0 -top-2 -right-2"></span>
                    <span class="absolute w-12 inset-0 bg-secondary-400/50 rounded-xl z-0 top-2 left-2"></span>
                    <div class="z-10 relative">
                        <svg class="shrink-0 size-7 lg:size-14 md:size-9 mx-auto text-gray-700 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
                            <path
                                d="M28.3196 15.91L27.7096 15.29L27.4596 15.05C27.7815 14.0636 27.9633 13.0369 27.9996 12C27.9996 9.87827 27.1567 7.84344 25.6564 6.34315C24.1561 4.84286 22.1213 4 19.9996 4H16.3196C15.9054 3.99974 15.4972 4.09921 15.1296 4.29C14.6819 4.18069 14.2276 4.10052 13.7696 4.05C13.5396 4.05 13.3596 4.05 13.2196 4.05H12.9996C10.8778 4.05 8.843 4.89286 7.34271 6.39315C5.84242 7.89344 4.99957 9.92827 4.99957 12.05V14.15L3.80957 15.3C3.42763 15.6865 3.16827 16.1771 3.06399 16.7104C2.95972 17.2436 3.01517 17.7958 3.2234 18.2977C3.43163 18.7996 3.78337 19.2289 4.23453 19.5317C4.6857 19.8345 5.21621 19.9974 5.75957 20C5.87601 20.0102 5.99312 20.0102 6.10957 20C6.23414 20.463 6.47512 20.8864 6.80957 21.23C7.27174 21.6791 7.87695 21.9516 8.51957 22C8.57506 22.6448 8.85456 23.2498 9.30957 23.71C9.76566 24.1694 10.3736 24.4467 11.0196 24.49C11.0673 25.1348 11.3439 25.7413 11.7996 26.2C12.2796 26.6835 12.9225 26.9709 13.6029 27.006C14.2833 27.0411 14.9523 26.8215 15.4796 26.39L16.2996 27.2C16.5551 27.457 16.859 27.6609 17.1936 27.8001C17.5283 27.9393 17.8871 28.0109 18.2496 28.0109C18.612 28.0109 18.9709 27.9393 19.3055 27.8001C19.6402 27.6609 19.944 27.457 20.1996 27.2C20.6686 26.7445 20.9533 26.1322 20.9996 25.48C21.6455 25.4367 22.2535 25.1594 22.7096 24.7C23.1551 24.2395 23.4273 23.6387 23.4796 23C24.1244 22.9445 24.7294 22.665 25.1896 22.21C25.555 21.8455 25.8084 21.384 25.9196 20.88C26.3546 20.9555 26.8015 20.9219 27.2203 20.7823C27.6392 20.6427 28.0169 20.4014 28.3196 20.08C28.5944 19.8068 28.8125 19.4819 28.9613 19.1241C29.1102 18.7663 29.1868 18.3825 29.1868 17.995C29.1868 17.6075 29.1102 17.2237 28.9613 16.8659C28.8125 16.5081 28.5944 16.1832 28.3196 15.91V15.91ZM16.3196 6H19.9996C21.5909 6 23.117 6.63214 24.2422 7.75736C25.3674 8.88258 25.9996 10.4087 25.9996 12C25.982 12.4745 25.9218 12.9464 25.8196 13.41L21.7096 9.29C21.6161 9.19732 21.5053 9.12399 21.3835 9.07423C21.2616 9.02447 21.1312 8.99924 20.9996 9H16.5196C16.2952 8.99846 16.0768 9.07243 15.8996 9.21V9.21L13.8996 10.74C13.6459 10.9128 13.3361 10.9827 13.0329 10.9357C12.7297 10.8886 12.4556 10.7281 12.2662 10.4866C12.0769 10.2452 11.9863 9.94075 12.0129 9.63503C12.0395 9.32931 12.1813 9.04513 12.4096 8.84L15.8596 6.14C15.9898 6.03715 16.1541 5.98717 16.3196 6V6ZM5.21957 17.79C5.08022 17.6448 5.00242 17.4513 5.00242 17.25C5.00242 17.0487 5.08022 16.8552 5.21957 16.71L6.70957 15.22C6.78033 15.1491 6.86457 15.0932 6.95731 15.0554C7.05006 15.0176 7.14943 14.9988 7.24957 15C7.34819 14.999 7.446 15.0179 7.53709 15.0557C7.62818 15.0936 7.71067 15.1494 7.77957 15.22C7.85092 15.2907 7.90756 15.3748 7.94622 15.4675C7.98487 15.5601 8.00478 15.6596 8.00478 15.76C8.00478 15.8604 7.98487 15.9599 7.94622 16.0525C7.90756 16.1452 7.85092 16.2293 7.77957 16.3L6.29957 17.79C6.15209 17.9249 5.95945 17.9997 5.75957 17.9997C5.55968 17.9997 5.36704 17.9249 5.21957 17.79V17.79ZM7.99957 19.25C7.99923 19.1506 8.01949 19.0521 8.05907 18.9609C8.09866 18.8697 8.15671 18.7877 8.22957 18.72L9.70957 17.23C9.78066 17.1596 9.86496 17.1039 9.95763 17.0662C10.0503 17.0284 10.1495 17.0093 10.2496 17.01C10.3986 17.0109 10.5441 17.0556 10.6679 17.1386C10.7917 17.2215 10.8884 17.339 10.9459 17.4765C11.0035 17.614 11.0193 17.7654 10.9915 17.9118C10.9637 18.0582 10.8935 18.1932 10.7896 18.3L9.29957 19.79C9.156 19.9287 8.96419 20.0062 8.76457 20.0062C8.56495 20.0062 8.37313 19.9287 8.22957 19.79C8.15595 19.7208 8.0975 19.6371 8.0579 19.5441C8.01831 19.4512 7.99845 19.351 7.99957 19.25V19.25ZM10.7196 21.25L12.2096 19.76C12.2803 19.6891 12.3646 19.6332 12.4573 19.5954C12.5501 19.5576 12.6494 19.5388 12.7496 19.54C12.8482 19.539 12.946 19.5579 13.0371 19.5957C13.1282 19.6336 13.2107 19.6894 13.2796 19.76C13.3509 19.8307 13.4076 19.9148 13.4462 20.0075C13.4849 20.1001 13.5048 20.1996 13.5048 20.3C13.5048 20.4004 13.4849 20.4999 13.4462 20.5925C13.4076 20.6852 13.3509 20.7693 13.2796 20.84L11.7996 22.29C11.6564 22.4332 11.4621 22.5137 11.2596 22.5137C11.057 22.5137 10.8628 22.4332 10.7196 22.29C10.5763 22.1468 10.4959 21.9525 10.4959 21.75C10.4959 21.5475 10.5763 21.3532 10.7196 21.21V21.25ZM13.2196 24.82C13.1482 24.7493 13.0916 24.6652 13.0529 24.5725C13.0143 24.4799 12.9944 24.3804 12.9944 24.28C12.9944 24.1796 13.0143 24.0801 13.0529 23.9875C13.0916 23.8948 13.1482 23.8107 13.2196 23.74L14.6996 22.26C14.8428 22.116 15.0365 22.0334 15.2396 22.03C15.3403 22.0306 15.44 22.0513 15.5327 22.0908C15.6254 22.1303 15.7093 22.1878 15.7796 22.26C15.9183 22.4036 15.9958 22.5954 15.9958 22.795C15.9958 22.9946 15.9183 23.1864 15.7796 23.33L14.2896 24.82C14.1409 24.9535 13.9461 25.0239 13.7465 25.0164C13.5468 25.009 13.3579 24.9242 13.2196 24.78V24.82ZM26.2196 18.94C25.845 18.8391 25.5013 18.6467 25.2196 18.38V18.33L23.2196 16.33C23.0313 16.1417 22.7759 16.0359 22.5096 16.0359C22.2433 16.0359 21.9879 16.1417 21.7996 16.33C21.6113 16.5183 21.5055 16.7737 21.5055 17.04C21.5055 17.3063 21.6113 17.5617 21.7996 17.75L23.7996 19.75C23.9201 19.8958 23.9819 20.0812 23.973 20.2702C23.964 20.4591 23.885 20.6379 23.7512 20.7717C23.6175 20.9054 23.4387 20.9845 23.2497 20.9934C23.0608 21.0023 22.8753 20.9405 22.7296 20.82C22.6366 20.7263 22.526 20.6519 22.4041 20.6011C22.2823 20.5503 22.1516 20.5242 22.0196 20.5242C21.8876 20.5242 21.7568 20.5503 21.635 20.6011C21.5131 20.6519 21.4025 20.7263 21.3096 20.82C21.1233 21.0074 21.0188 21.2608 21.0188 21.525C21.0188 21.7892 21.1233 22.0426 21.3096 22.23C21.3806 22.2998 21.4371 22.3831 21.4756 22.4749C21.5141 22.5668 21.5339 22.6654 21.5339 22.765C21.5339 22.8646 21.5141 22.9632 21.4756 23.0551C21.4371 23.1469 21.3806 23.2302 21.3096 23.3C21.2389 23.3714 21.1548 23.428 21.0621 23.4667C20.9694 23.5053 20.87 23.5252 20.7696 23.5252C20.6691 23.5252 20.5697 23.5053 20.477 23.4667C20.3843 23.428 20.3002 23.3714 20.2296 23.3C20.0422 23.1137 19.7888 23.0092 19.5246 23.0092C19.2604 23.0092 19.0069 23.1137 18.8196 23.3V23.3C18.6333 23.4874 18.5288 23.7408 18.5288 24.005C18.5288 24.2692 18.6333 24.5226 18.8196 24.71C18.9628 24.8519 19.0438 25.0449 19.0447 25.2465C19.0456 25.4481 18.9665 25.6418 18.8246 25.785C18.6827 25.9282 18.4897 26.0092 18.2881 26.0101C18.0865 26.0111 17.8928 25.9319 17.7496 25.79L16.9496 24.99L17.2296 24.72C17.4869 24.4636 17.691 24.1589 17.8303 23.8234C17.9696 23.4879 18.0413 23.1283 18.0413 22.765C18.0413 22.4017 17.9696 22.0421 17.8303 21.7066C17.691 21.3711 17.4869 21.0664 17.2296 20.81C16.7653 20.3346 16.1425 20.0463 15.4796 20C15.4319 19.3552 15.1552 18.7487 14.6996 18.29V18.29C14.239 17.8444 13.6382 17.5723 12.9996 17.52C12.9441 16.8752 12.6646 16.2702 12.2096 15.81C11.9137 15.5051 11.551 15.2733 11.1501 15.1327C10.7491 14.9921 10.321 14.9467 9.89957 15C9.73566 14.3747 9.35284 13.8289 8.82067 13.4619C8.28851 13.0949 7.64232 12.931 6.99957 13V12C6.99894 10.4377 7.60769 8.93681 8.6964 7.81635C9.78511 6.69589 11.2679 6.04426 12.8296 6L11.2296 7.25C10.5737 7.77889 10.1521 8.54445 10.0556 9.38148C9.95924 10.2185 10.1958 11.0599 10.7143 11.724C11.2327 12.3882 11.9915 12.8219 12.8269 12.9315C13.6623 13.0411 14.5073 12.8179 15.1796 12.31L16.8596 11H20.5896L24.5296 15L26.8996 17.36C27.0654 17.5438 27.1572 17.7825 27.1572 18.03C27.1572 18.2775 27.0654 18.5163 26.8996 18.7C26.8131 18.7953 26.7018 18.8645 26.5781 18.8998C26.4544 18.9352 26.3233 18.9352 26.1996 18.9L26.2196 18.94Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-2 sm:mt-6">
                    <h3 class="sm:text-lg font-semibold text-gray-600">
                        Acompañamiento técnico y estratégico
                    </h3>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div class="text-center group" data-aos="fade-up">
                <div
                    class="relative w-fit mx-auto group-hover:scale-120 group-hover:translate-x-0 group-hover:translate-y-0 transition ease-in-out">
                    <span
                        class="absolute w-12 inset-0 bg-secondary-400/40 rounded-l-xl rounded-r-lg z-0 -top-2 -right-2"></span>
                    <span class="absolute w-12 inset-0 bg-secondary-400/50 rounded-xl z-0 top-2 left-2"></span>
                    <div class="z-10 relative">
                        <svg class="shrink-0 size-7 lg:size-14 md:size-9 mx-auto text-gray-700 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12h1m-3.5-6.5 1-1M12 3V2M5.5 5.5l-1-1M3 12H2m8 10h4m3-10a5 5 0 1 0-7 4.584V19h4v-2.416A5.001 5.001 0 0 0 17 12z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="mt-2 sm:mt-6">
                    <h3 class="sm:text-lg font-semibold text-gray-600">
                        Compromiso con la innovación sostenible
                    </h3>
                </div>
            </div>
            <!-- End Icon Block -->


            <!-- Icon Block -->
            <div class="text-center group" data-aos="fade-up">
                <div
                    class="relative w-fit mx-auto group-hover:scale-120 group-hover:translate-x-0 group-hover:translate-y-0 transition ease-in-out">
                    <span
                        class="absolute w-12 inset-0 bg-secondary-400/40 rounded-l-xl rounded-r-lg z-0 -top-2 -right-2"></span>
                    <span class="absolute w-12 inset-0 bg-secondary-400/50 rounded-xl z-0 top-2 left-2"></span>
                    <div class="z-10 relative">
                        <svg class="shrink-0 size-7 lg:size-14 md:size-9 mx-auto text-gray-700 dark:text-neutral-200"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            version="1.1" viewBox="0 0 36 36" preserveAspectRatio="xMidYMid meet"
                            fill="currentColor">
                            <title>network-globe-outline-badged</title>
                            <path d="M26.58,32h-18a1,1,0,1,0,0,2h18a1,1,0,0,0,0-2Z"
                                class="clr-i-outline--badged clr-i-outline-path-1--badged"></path>
                            <path
                                d="M31.5,13.35a7.54,7.54,0,0,1-1.5.15l-.51,0a11.91,11.91,0,0,1-.25,6,16,16,0,0,1-5-.41,2.33,2.33,0,0,0-.33-1.19,18.59,18.59,0,0,0,2.78-5.18,7.49,7.49,0,0,1-1.31-.82,17,17,0,0,1-2.61,5,2.28,2.28,0,0,0-2.58.57c-.35-.2-.7-.4-1-.63a16,16,0,0,1-4.93-5.23,2.25,2.25,0,0,0,.47-1.77,17,17,0,0,1,8.53-.62,7.43,7.43,0,0,1-.56-1.59A18.56,18.56,0,0,0,14,8.53a2.33,2.33,0,0,0-1.14-.61l-.25,0c-.12-.42-.23-.84-.32-1.27s-.14-.81-.19-1.22A11.92,11.92,0,0,1,22.57,5a7.45,7.45,0,0,1,.53-2A14,14,0,0,0,3.75,16c0,.45,0,.89.07,1.33l0,0h0a14,14,0,1,0,27.68-4ZM10.76,6.27c0,.21.06.43.1.64.09.44.21.87.33,1.3a2.28,2.28,0,0,0-1.1,2.25A18.32,18.32,0,0,0,5.9,14.22,12,12,0,0,1,10.76,6.27Zm0,15.71A2.34,2.34,0,0,0,9.2,23.74l-.64,0A11.94,11.94,0,0,1,5.8,16.92l.11-.19a16.9,16.9,0,0,1,4.81-4.89,2.31,2.31,0,0,0,2.28.63,17.53,17.53,0,0,0,5.35,5.65c.41.27.83.52,1.25.76A2.32,2.32,0,0,0,19.78,20a16.94,16.94,0,0,1-6.2,3.11A2.34,2.34,0,0,0,10.76,22Zm7,6a11.92,11.92,0,0,1-5.81-1.51l.28-.06a2.34,2.34,0,0,0,1.57-1.79,18.43,18.43,0,0,0,7-3.5,2.29,2.29,0,0,0,3-.62,17.41,17.41,0,0,0,4.32.56l.53,0A12,12,0,0,1,17.75,28Z"
                                class="clr-i-outline--badged clr-i-outline-path-2--badged"></path>
                            <circle cx="30" cy="6" r="5"
                                class="clr-i-outline--badged clr-i-outline-path-3--badged clr-i-badge"></circle>
                            <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
                        </svg>
                    </div>
                </div>
                <div class="mt-2 sm:mt-6">
                    <h3 class="sm:text-lg font-semibold text-gray-600">
                        Un solo aliado para todas tus necesidades tecnológicas
                    </h3>
                </div>
            </div>
            <!-- End Icon Block -->
        </div>
        <!-- End Grid -->
    </div>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:my-32 mx-auto text-center">
        <hgroup>
            <h2
                class="text-xs/5 font-semibold text-gray-500 uppercase data-dark:text-gray-400">
                ¿Necesitas una solución tecnológica?
            </h2>
            <p class="mt-6 text-3xl font-medium tracking-tight text-gray-950 sm:text-3xl">En IT NEXVEL estamos listos para ayudarte.</p>
        </hgroup>
        <p class="mx-auto mt-6 max-w-xs text-sm/6 text-gray-500">Contáctanos para discutir tus necesidades.</p>
        <div class="mt-6">
            <a
                href="{{ route('contact') }}"
                class="btn-11 relative px-3 py-2 uppercase bg-secondary-500">
                Contactanos
            </a>
        </div>
    </div>
    <!-- End Features -->
</x-layouts.guest>
