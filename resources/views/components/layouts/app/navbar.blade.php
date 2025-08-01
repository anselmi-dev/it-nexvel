<header class="bg-white_ _shadow z-10 relative">
    <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-3 lg:px-4">
        <div class="flex lg:flex-1 scrollanimation animated fadeInUp" data-aos="fade-up">
            <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                <span class="sr-only">{{ config('app.name') }}</span>
                <x-app-logo-svg class="h-8 w-auto px-2 fill-[#42575f] text-[#42575f]" />
            </a>
        </div>
        
        <div class="flex lg:hidden scrollanimation animated fadeInUp" data-aos="fade-up">
            <button type="button" command="show-modal" commandfor="mobile-menu"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                    aria-hidden="true" class="size-6">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>

        <el-popover-group class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-5 items-center scrollanimation animated fadeInUp" data-aos="fade-up">
            <div class="relative">
                <button popovertarget="desktop-menu-services"
                    type="button"
                    class="btn btn-3 flex items-center gap-x-1 font-semibold text-gray-900 cursor-pointer py-3 px-5 text-base hover:bg-primary-100">
                    <span class="uppercase">Servicios</span>
                    <svg
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        data-slot="icon"
                        aria-hidden="true"
                        class="size-5 mr-1 flex-none text-gray-400">
                        <path
                            d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                </button>

                <el-popover id="desktop-menu-services" anchor="bottom" popover
                    class="w-screen max-w-md overflow-hidden  bg-white shadow-lg ring-1 ring-gray-900/5 transition transition-discrete [--anchor-gap:--spacing(3)] backdrop:bg-transparent open:block data-closed:translate-y-1 data-closed:opacity-0 data-enter:duration-200 data-enter:ease-out data-leave:duration-150 data-leave:ease-in">
                    <div class="p-4">
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                            <div
                                class="flex size-11 flex-none items-center justify-center rounded-lg bg-primary-50 group-hover:bg-secondary-300">
                                <x-icons.infrastructure class="shrink-0 size-9 text-gray-800 dark:text-white" />
                            </div>
                            <div class="flex-auto">
                                <a href="{{ route('services') }}#infraestructura-tecnologica" class="block font-semibold text-gray-900">
                                    Infraestructura tecnológica
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Texto texto texto</p>
                            </div>
                        </div>
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                            <div
                                class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-secondary-300">
                                <x-icons.cloud class="shrink-0 size-9 text-gray-800 dark:text-white" />
                            </div>
                            <div class="flex-auto">
                                <a href="{{ route('services') }}#computacion-en-la-nube-y-ciberseguridad" class="block font-semibold text-gray-900">
                                    Computación en la nube y ciberseguridad
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Texto texto texto</p>
                            </div>
                        </div>
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                            <div
                                class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-secondary-300">
                                <x-icons.code class="shrink-0 size-9 text-gray-800 dark:text-white" />
                            </div>
                            <div class="flex-auto">
                                <a href="{{ route('services') }}#desarrollo-y-presencia-digital" class="block font-semibold text-gray-900">
                                    Desarrollo y presencia digital
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Texto texto texto</p>
                            </div>
                        </div>
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                            <div
                                class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-secondary-300">
                                <x-icons.energies class="shrink-0 size-9 text-gray-800 dark:text-white" />
                            </div>
                            <div class="flex-auto">
                                <a href="{{ route('services') }}#energias-renovables" class="block font-semibold text-gray-900">
                                    Energías renovables
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Texto texto texto</p>
                            </div>
                        </div>
                        <div
                            class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                            <div
                            class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-secondary-300">
                                <x-icons.support class="shrink-0 size-9 text-gray-800 dark:text-white" />
                            </div>
                            <div class="flex-auto">
                                <a href="{{ route('services') }}#consultoria-y-soporte-tecnico" class="block font-semibold text-gray-900">
                                    Consultoría y soporte técnico
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Texto texto texto</p>
                            </div>
                        </div>
                    </div>
                </el-popover>
            </div>

            <a href="{{ route('about') }}" class="btn relative btn-3 font-semibold text-gray-900 py-3 px-5 text-base hover:bg-primary-100 text-center"><span class="uppercase">Nosotros</span></a>
            <a href="{{ route('contact') }}" class="btn flex justify-center items-center gap-1 py-3 px-5 text-base font-medium text-center text-white  bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 group">
                <span class="uppercase">Contactanos</span>
                <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
            </a>
        </el-popover-group>
    </nav>

    <el-dialog>
        <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
            <div tabindex="0" class="fixed inset-0 focus:outline-none">
                <el-dialog-panel
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">{{ config('app.name') }}</span>
                            <x-app-logo-svg class="h-8 w-auto px-2 fill-[#42575f] text-[#42575f]" />
                        </a>
                        <button type="button" command="close" commandfor="mobile-menu"
                            class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6">
                                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <div class="-mx-3">
                                    <button type="button" command="--toggle" commandfor="products"
                                        class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">
                                        Product
                                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon"
                                            aria-hidden="true" class="size-5 flex-none in-aria-expanded:rotate-180">
                                            <path
                                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                                clip-rule="evenodd" fill-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <el-disclosure id="products" hidden class="mt-2 block space-y-2">
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Analytics</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Engagement</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Security</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Integrations</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Automations</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Watch
                                            demo</a>
                                        <a href="#"
                                            class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Contact
                                            sales</a>
                                    </el-disclosure>
                                </div>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </el-dialog-panel>
            </div>
        </dialog>
    </el-dialog>
</header>
