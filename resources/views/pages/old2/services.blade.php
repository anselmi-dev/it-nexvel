<x-layouts.guest :title="__('Servicios')">
    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <x-layouts.title-section title="Soluciones tecnológicas integrales para un mundo conectado"
            description="En IT NEXVEL ofrecemos un portafolio completo de servicios especializados en ingeniería, tecnología y transformación digital. Nuestro enfoque es entregar soluciones efectivas, sostenibles y a la medida de las necesidades de cada cliente." />

        <div class="max-w-screen-xl px-3 md:px-6 lg:px-4 mx-auto py-32 flex flex-col space-y-24">
            <div class="grid sm:grid-cols-1 items-center gap-12">
                <x-card-service-large title="Infraestructura tecnológica" id="infraestructura-tecnologica">
                    <x-slot name="description">
                        <ul class="list-none space-y-2">
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Diseño, gestión e implementación de redes informáticas y telecomunicaciones.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Sistemas de voz sobre IP (VoIP).
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Cableado estructurado: cobre y fibra óptica.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Seguridad electrónica y videovigilancia.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Domótica e inmótica para hogares, oficinas y edificios inteligentes.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Sistemas de energía eléctrica, respaldo y UPS.
                            </li>
                        </ul>
                    </x-slot>
                    <x-slot name="icon">
                        <x-icons.infrastructure class="shrink-0 size-12 text-primary-600" />
                    </x-slot>
                </x-card-service-large>
                <x-card-service-large title="Computación en la nube y ciberseguridad" right id="computacion-en-la-nube-y-ciberseguridad">
                    <x-slot name="description">
                        <ul class="list-none space-y-2">
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Migración, configuración y administración de servicios en la nube.
                            </li>
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Seguridad informática y protección de datos.
                            </li>
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Auditorías de ciberseguridad y pruebas de vulnerabilidad.
                            </li>
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Soluciones de acceso remoto seguro (VPN, firewalls, etc.).
                            </li>
                        </ul>
                    </x-slot>
                    <x-slot name="icon">
                        <x-icons.cloud class="shrink-0 size-12 text-primary-600" />
                    </x-slot>
                </x-card-service-large>
                <x-card-service-large title="Desarrollo y presencia digital" id="desarrollo-y-presencia-digital">
                    <x-slot name="description">
                        <ul class="list-none space-y-2">
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Sistemas de información a medida.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Desarrollo de sitios web y aplicaciones móviles.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Gestión y mantenimiento de bases de datos.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Estrategias de SEO, marketing digital y posicionamiento web.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Asesoría en presencia y reputación digital.
                            </li>
                        </ul>

                    </x-slot>
                    <x-slot name="icon">
                        <x-icons.code class="shrink-0 size-12 text-primary-600" />
                    </x-slot>
                </x-card-service-large>
                <x-card-service-large title="Energías renovables" right id="energias-renovables">
                    <x-slot name="description">
                        <ul class="list-none space-y-2">
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Diseño e instalación de sistemas solares, eólicos y otras fuentes limpias.
                            </li>
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Mantenimiento de soluciones energéticas sostenibles.
                            </li>
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Comercialización de paneles solares, inversores, baterías y más.
                            </li>
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                Integración de sistemas de energía a infraestructuras tecnológicas.
                            </li>
                        </ul>
                    </x-slot>
                    <x-slot name="icon">
                        <x-icons.energies class="shrink-0 size-12 text-primary-600" />
                    </x-slot>
                </x-card-service-large>
                <x-card-service-large title="Consultoría y soporte técnico" id="consultoria-y-soporte-tecnico">
                    <x-slot name="description">
                        <ul class="list-none space-y-2">
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Asesoría en proyectos tecnológicos y transformación digital.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Soporte técnico remoto y presencial.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Diseño de infraestructuras tecnológicas escalables y seguras.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Acompañamiento técnico para empresas e instituciones.
                            </li>
                        </ul>
                    </x-slot>
                    <x-slot name="icon">
                        <x-icons.support class="shrink-0 size-12 text-primary-600" />
                    </x-slot>
                </x-card-service-large>
                <x-card-service-large title="Capacitación especializada" right id="capacitacion-especializada">
                    <x-slot name="description">
                        <ul class="list-none space-y-2">
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Cursos y talleres en redes, servidores, ciberseguridad, domótica y más.
                            </li>   
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Formación en buenas prácticas digitales y seguridad informática.
                            </li>
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Programas de capacitación adaptados a empresas, entidades educativas o usuarios particulares.
                            </li>
                        </ul>
                    </x-slot>
                    <x-slot name="icon">
                        <x-icons.training class="shrink-0 size-12 text-primary-600" />
                    </x-slot>
                </x-card-service-large>
                <x-card-service-large title="Comercialización de tecnología" id="comercializacion-de-tecnologia">
                    <x-slot name="description">
                        <ul class="list-none space-y-2">
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Cursos y talleres en redes, servidores, ciberseguridad, domótica y más.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Formación en buenas prácticas digitales y seguridad informática.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Programas de capacitación adaptados a empresas, entidades educativas o usuarios particulares.
                            </li>
                        </ul>
                    </x-slot>
                    <x-slot name="icon">
                        <x-icons.training class="shrink-0 size-12 text-primary-600" />
                    </x-slot>
                </x-card-service-large>
                <x-card-service-large title="Comercialización de tecnología" right id="comercializacion-de-tecnologia">
                    <x-slot name="description">
                        <ul class="list-none space-y-2">
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Venta y distribución de equipos informáticos, electrónicos y de telecomunicaciones.
                            </li>
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Licenciamiento de software especializado.
                            </li>
                            <li class="flex items-center gap-x-2 flex-row-reverse text-right">
                                <x-icons.circle/>
                                Equipos eléctricos, sistemas de respaldo, seguridad digital, automatización y cableado
                            </li>
                        </ul>
                    </x-slot>
                    <x-slot name="icon">
                        <x-icons.commercialization class="shrink-0 size-12 text-primary-600" />
                    </x-slot>
                </x-card-service-large>
                <x-card-service-large title="Outsourcing tecnológico" id="outsourcing-tecnologico">
                    <x-slot name="description">
                        <ul class="list-none space-y-2">
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Externalización de talento humano especializado en tecnologías de la información.
                            </li>
                            <li class="flex items-center gap-x-2">
                                <x-icons.circle/>
                                Servicios para empresas privadas, entidades públicas y organizaciones mixtas.
                            </li>
                        </ul>
                    </x-slot>
                    <x-slot name="icon">
                        <x-icons.outsourcing class="shrink-0 size-12 text-primary-600" />
                    </x-slot>
                </x-card-service-large>
            </div>
        </div>
    </div>
</x-layouts.guest>