<x-layouts.guest :title="__('IT NEXVEL')">
    <section class="relative min-h-screen w-full bg-cover bg-center flex items-center lg:items-end justify-start"
        style="background-image: url('{{ asset('images/home-bg.jpg?v=2025') }}');">
        <!-- Overlay / gradient to match the reference look -->
        <div class="absolute inset-0 bg-gradient-to-tr from-[#0b1020]/90 via-sky-500/30 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/20 to-white"></div>

        <!-- Content -->
        <div class="relative mx-auto max-w-7xl w-full px-6 md:px-10 lg:px-16 h-full flex items-center lg:items-end">
            <div class="pb-14 md:pb-20 lg:pb-24">
                <img src="{{ asset('images/logo.png?v=2025') }}" alt="IT NEXVEL"
                    class="h-14 md:h-16 lg:h-36 w-auto drop-shadow-sm select-none" />

                <h1 class="mt-8 text-4xl lg:text-6xl font-medium leading-tight tracking-wide text-app font-now">
                    Tecnología inteligente para un
                    <span class="block">mundo en evolución.</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20 relative bg-white min-h-[calc(80vh-8rem)] flex items-center">
        <div
            class="mx-auto max-w-7xl w-full px-6 md:px-10 lg:px-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 items-center">
            <!-- Left with icons and heading -->
            <div class="relative col-span-full lg:col-span-5">
                <img src="{{ asset('images/bombilla-top.svg') }}" alt="Icono superior" class="h-16 lg:h-24 w-auto" />
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-app leading-tight font-century">
                    En <img src="{{ asset('images/logo.png?v=2025') }}" alt="IT NEXVEL" class="inline h-10 md:h-10 lg:h-14 top-[-6px] relative w-auto drop-shadow-sm select-none" />
                     transformamos <br /> tecnología en <br /> soluciones reales.
                </h2>
                <img src="{{ asset('images/bombilla-bottom.svg') }}" alt="Icono inferior" class="h-16 lg:h-24 w-auto" />
            </div>
            <!-- Right with paragraph text -->
            <div class="text-app space-y-5 text-base leading-relaxed font-now col-span-full lg:col-span-7">
                <p>
                    Somos una empresa de ingeniería y tecnología dedicada a ofrecer soluciones integrales que
                    conectan
                    innovación, eficiencia y sostenibilidad.
                </p>
                <p>
                    Nuestro equipo está conformado por profesionales multidisciplinarios con amplia experiencia en
                    redes, informática, telecomunicaciones, automatización, desarrollo de software y ciberseguridad.
                </p>
                <p>
                    Trabajamos con una visión orientada al futuro, ayudando a empresas, instituciones y personas a
                    evolucionar sus entornos digitales mediante herramientas modernas, infraestructura robusta y
                    estrategias tecnológicas efectivas.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="py-20">
        <div
            class="py-10 relative bg-cover bg-center text-white min-h-[calc(80vh-8rem)] flex items-center font-century"
            style="background-image: url('{{ asset('images/bg-nuestros-servicios.jpg?v=2025') }}');">
            {{-- <div class="absolute inset-0 bg-[#0b2d5a]/70"></div> --}}
            <div class="relative mx-auto max-w-7xl px-6 md:px-10 lg:px-16 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-12">NUESTROS SERVICIOS</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
                    <div
                        class="bg-[#154269] rounded-lg px-4 py-6 min-h-[160px] flex items-center justify-center text-sm font-semibold leading-snug">
                        INFRAESTRUCTURA TECNOLÓGICA, CLOUD, REDES Y CIBERSEGURIDAD.
                    </div>
                    <div
                        class="bg-[#154269] rounded-lg px-4 py-6 min-h-[160px] flex items-center justify-center text-sm font-semibold leading-snug">
                        DOMÓTICA, INMÓTICA Y SEGURIDAD ELECTRÓNICA.
                    </div>
                    <div
                        class="bg-[#154269] rounded-lg px-4 py-6 min-h-[160px] flex items-center justify-center text-sm font-semibold leading-snug">
                        CONSULTORÍA, GESTIÓN & ADM. DE PROYECTOS.
                    </div>
                    <div
                        class="bg-[#154269] rounded-lg px-4 py-6 min-h-[160px] flex items-center justify-center text-sm font-semibold leading-snug">
                        SEO, MARKETING DIGITAL Y PRESENCIA ONLINE.
                    </div>
                    <div
                        class="bg-[#154269] rounded-lg px-4 py-6 min-h-[160px] flex items-center justify-center text-sm font-semibold leading-snug">
                        FORMACIÓN ESPECIALIZADA Y OUTSOURCING IT.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuestra propuesta de valor -->
    <section class="py-[78px] flex items-center">
        <div
            class="relative mx-auto max-w-7xl px-6 md:px-10 lg:px-16 grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-[43px] leading-[1.05] font-extrabold text-app font-century">
                    Nuestra<br /> propuesta de valor
                </h2>
                <p class="mt-6 lg:mt-[90px] text-app text-base leading-relaxed lg:pr-10 font-now">
                    En IT NEXVEL, creemos en la transformación digital como una herramienta clave para impulsar el
                    crecimiento y la competitividad de las empresas. Ofrecemos una gama completa de servicios
                    tecnológicos que van desde la infraestructura tecnológica hasta la innovación y la ciberseguridad,
                    pasando por el desarrollo de software y la presencia digital.
                </p>
            </div>

            <div class="lg:mt-[90px]">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-[23px] text-center font-century">
                    <!-- Item -->
                    <div>
                        <img src="{{ asset('images/icon-aliado.svg') }}" alt="Un solo aliado" class="mx-auto h-[90px] w-auto" />
                        <h3 class="mt-4 font-bold text-app text-[14px]">Un solo aliado para todas tus<br /> necesidades
                            tecnológicas</h3>
                    </div>
                    <!-- Item -->
                    <div>
                        <img src="{{ asset('images/icon-acompanamiento.svg') }}" alt="Acompañamiento"
                            class="mx-auto h-[90px] w-auto" />
                        <h3 class="mt-4 font-bold text-app text-[14px]">Acompañamiento técnico y<br /> estratégico</h3>
                    </div>
                    <!-- Item -->
                    <div>
                        <img src="{{ asset('images/icon-compromiso.svg') }}" alt="Compromiso sostenible"
                            class="mx-auto h-[90px] w-auto" />
                        <h3 class="mt-4 font-bold text-app text-[14px]">Compromiso con la innovación<br /> sostenible</h3>
                    </div>
                    <!-- Item -->
                    <div>
                        <img src="{{ asset('images/icon-soluciones.svg') }}" alt="Soluciones escalables"
                            class="mx-auto h-[90px] w-auto" />
                        <h3 class="mt-4 font-bold text-app text-[14px]">Soluciones personalizadas y<br /> escalables</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Misión / Visión / Valores -->
    <section
        class="py-[78px] relative mx-auto max-w-6xl px-6 md:px-10 lg:px-16 grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-30">
        <!-- Izquierda: Misión / Visión -->
        <div class="space-y-16">
            <div class="text-center lg:text-left max-w-md">
                <h3 class="text-4xl font-extrabold tracking-wide text-app font-century">MISIÓN</h3>
                <p class="mt-6 text-black leading-relaxed mx-auto font-now">
                    Diseñar, implementar y mantener soluciones tecnológicas de alto impacto que fortalezcan la infraestructura digital de nuestros clientes, impulsando su crecimiento sostenible, su seguridad operativa y su ventaja competitiva en el mercado.
                </p>
            </div>
            <div class="text-center lg:text-left max-w-md">
                <h3 class="text-4xl font-extrabold tracking-wide text-app font-century">VISIÓN</h3>
                <p class="mt-6 text-black leading-relaxed mx-auto font-now">
                    Consolidarnos como una empresa líder en innovación tecnológica, reconocida a nivel nacional e internacional por la calidad de nuestros servicios, la excelencia de nuestro equipo humano y el compromiso constante con el desarrollo sostenible y responsable.
                </p>
            </div>
        </div>

        <!-- Derecha: Valores -->
        <div>
            <h3 class="text-4xl font-extrabold tracking-wide text-app font-century text-center lg:text-left">
                VALORES</h3>
            <ul class="mt-8 space-y-6 text-slate-600 font-now">
                <li class="text-black flex flex-col">
                    <div>
                        <span class="inline-block align-top text-sky-600 mr-3">◆</span>
                        <span class="font-semibold font-century">Innovación continua</span>
                    </div>
                    Incorporamos tecnologías emergentes para desarrollar soluciones que se adelantan a las necesidades del mercado.
                </li>
                <li class="text-black flex flex-col">
                    <div>
                        <span class="inline-block align-top text-sky-600 mr-3">◆</span>
                        <span class="font-semibold font-century">Compromiso</span>
                    </div>
                    Acompañamos cada proyecto con responsabilidad, cercanía y un firme enfoque en resultados concretos.
                </li>
                <li class="text-black flex flex-col">
                    <div>
                        <span class="inline-block align-top text-sky-600 mr-3">◆</span>
                        <span class="font-semibold font-century">Calidad y eficiencia</span>
                    </div>
                    Diseñamos soluciones robustas, seguras y optimizadas para generar valor sostenible.
                </li>
                <li class="text-black flex flex-col">
                    <div>
                        <span class="inline-block align-top text-sky-600 mr-3">◆</span>
                        <span class="font-semibold font-century">Confianza</span>
                    </div>
                    Construimos relaciones sólidas basadas en la transparencia, la integridad y el respeto mutuo.
                </li>
                <li class="text-black flex flex-col">
                    <div>
                        <span class="inline-block align-top text-sky-600 mr-3">◆</span>
                        <span class="font-semibold font-century">Sostenibilidad</span>
                    </div>
                    Impulsamos una tecnología consciente, que equilibra eficiencia operativa con responsabilidad ambiental.
                </li>
            </ul>
        </div>
    </section>

    <!-- Contacto -->
    <section class="relative py-[38px] bg-cover bg-center"
        style="background-image: url('{{ asset('images/bg-contacto.jpg') }}');">
        <div class="absolute inset-0 bg-white/40"></div>
        <div class="relative mx-auto max-w-7xl px-6 md:px-10 lg:px-16 text-center">
            <h2 class="text-4xl md:text-5xl text-app font-extrabold font-century mb-10 lg:mb-[35px]">Contáctanos!</h2>
            <p class="mt-4 text-lg lg:text-[24px] max-w-[566px] mx-auto text-app font-century">
                y da el siguiente paso hacia una infraestructura digital más eficiente, segura y escalable.
            </p>

            <div class="mt-[40px] grid grid-cols-1 md:grid-cols-2 gap-10 mx-auto max-w-[566px]">
                <div>
                    <a href="mailto:contacto@itnexvel.com" target="_blank">
                        <img src="{{ asset('images/icon-correo.png') }}" alt="Correo" class="mx-auto h-[60px] w-auto" />
                        <h4 class="mt-[30px] font-semibold text-sky-800 font-century">Correo electrónico</h4>
                        <p class="mt-2 font-now text-gray-700 underline">contacto@itnexvel.com</p>
                    </a>
                </div>
                <div>
                    <a href="tel:+56912345678" target="_blank">
                        <img src="{{ asset('images/icon-telefono.png') }}" alt="Teléfono" class="mx-auto h-[60px] w-auto" />
                        <h4 class="mt-[30px] font-semibold text-sky-800 font-century">Teléfono</h4>
                        <p class="mt-2 font-now text-gray-700">+56 9 1234 5678</p>
                    </a>
                </div>
            </div>

            <div class="mt-[90px] flex items-center justify-center gap-8 font-now">
                <a href="https://x.com/itnexvel" target="_blank" aria-label="Twitter"
                    class="transition-transform hover:scale-105 flex flex-col justify-center items-center">
                    <img src="{{ asset('images/icon-x.png') }}" class="h-10 w-10" alt="Twitter" />
                    <span>Twitter</span>
                </a>
                <a href="https://linkedin.com/company/it-nexvel" target="_blank" aria-label="LinkedIn"
                    class="transition-transform hover:scale-105 flex flex-col justify-center items-center">
                    <img src="{{ asset('images/icon-linkedin.png') }}" class="h-10 w-10" alt="LinkedIn" />
                    <span>LinkedIn</span>
                </a>
                <a href="https://www.instagram.com/itnexvel/" target="_blank" aria-label="Instagram"
                    class="transition-transform hover:scale-105 flex flex-col justify-center items-center">
                    <img src="{{ asset('images/icon-instagram.png') }}" class="h-10 w-10" alt="Instagram" />
                    <span>Instagram</span>
                </a>
            </div>
        </div>
    </section>
</x-layouts.guest>
