<x-layouts.guest :title="__('Contacto')">
    <!-- Contact Us -->
    <div class="px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-4xl mx-auto">
            <x-layouts.title-section title="Contactanos" description="En IT NEXVEL estamos listos para ayudarte. Ya sea que necesites asesoría, soporte técnico, implementación de proyectos o simplemente quieras conocer más sobre nuestros servicios, no dudes en escribirnos."/>
        </div>

        <div class="max-w-5xl mx-auto mt-12 grid items-center lg:grid-cols-12 gap-6 lg:gap-16">
            <!-- Card -->
            <div class="col-span-8 flex flex-col border border-gray-200 rounded p-4 sm:p-6 lg:p-8 scrollanimation animated fadeInUp" data-aos="fade-up">
                <h2 class="mb-8 text-base font-semibold text-gray-800">
                    ¿Necesitas una solución tecnológica?
                </h2>

                <form class="">
                    <div class="grid gap-4">
                        <!-- Grid -->
                        <div>
                            <label for="hs-firstname-contacts-1" class="sr-only">Nombre completo</label>
                            <input type="text" name="hs-firstname-contacts-1" id="hs-firstname-contacts-1"
                                class="py-2.5 sm:py-3 px-4 block w-full border border-gray-200 rounded sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Nombre completo">
                        </div>

                        <div>
                            <label for="hs-email-contacts-1" class="sr-only">Correo electrónico</label>
                            <input type="email" name="hs-email-contacts-1" id="hs-email-contacts-1"
                                autocomplete="email"
                                class="py-2.5 sm:py-3 px-4 block w-full border border-gray-200 rounded sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Correo electrónico">
                        </div>

                        <div>
                            <label for="hs-phone-number-1" class="sr-only">Teléfono (opcional)</label>
                            <input type="text" name="hs-phone-number-1" id="hs-phone-number-1"
                                class="py-2.5 sm:py-3 px-4 block w-full border border-gray-200 rounded sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Número de teléfono">
                        </div>

                        <div>
                            <label for="hs-about-contacts-1" class="sr-only">Asunto</label>
                            <textarea id="hs-about-contacts-1" name="hs-about-contacts-1" rows="4"
                                class="py-2.5 sm:py-3 px-4 block w-full border border-gray-200 rounded sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Asunto"></textarea>
                        </div>

                        <div>
                            <label for="hs-about-contacts-1" class="sr-only">Mensaje</label>
                            <textarea id="hs-about-contacts-1" name="hs-about-contacts-1" rows="4"
                                class="py-2.5 sm:py-3 px-4 block w-full border border-gray-200 rounded sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-4 grid">
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center cursor-pointer gap-x-2 text-sm font-medium rounded border border-transparent bg-primary-600 text-white hover:bg-primary-700 focus:outline-hidden focus:bg-primary-700 disabled:opacity-50 disabled:pointer-events-none uppercase">
                            Enviar consulta
                        </button>
                    </div>

                    <div class="mt-3 text-center">
                        <p class="text-sm text-gray-500">
                            Te contactaremos en 1-2 días hábiles.
                        </p>
                    </div>
                </form>
            </div>
            <!-- End Card -->

            <div class="col-span-4 divide-y divide-gray-200 dark:divide-neutral-800 scrollanimation animated fadeInUp" data-aos="fade-up">
                <!-- Icon Block -->
                <div class="flex gap-x-7 py-6">
                    <svg class="shrink-0 size-6 mt-1.5 text-gray-800 dark:text-neutral-200"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                        <path d="M12 17h.01" />
                    </svg>
                    <div class="grow">
                        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">Estamos aquí para ayudarte.</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">Por favor, no dudes en hacernos llegar tus preguntas, comentarios o solicitudes.</p>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class=" flex gap-x-7 py-6">
                    <x-icons.localization class="shrink-0 size-6 mt-1.5 text-gray-800 dark:text-neutral-200"/>
                    <div class="grow">
                        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">Dirección</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">Av. Apoquindo 4501, piso 11, Las Condes, Región Metropolitana, Chile</p>
                        <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="#">
                            Ver en el mapa
                            <svg class="shrink-0 size-2.5 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class=" flex gap-x-7 py-6">
                    <x-icons.phone class="shrink-0 size-6 mt-1.5 text-gray-800 dark:text-neutral-200"/>
                    <div class="grow">
                        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">Telefono</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">+56 9 1234 5678</p>
                    </div>
                </div>
                <!-- End Icon Block -->
                
                <!-- Icon Block -->
                <div class=" flex gap-x-7 py-6">
                    <svg class="shrink-0 size-6 mt-1.5 text-gray-800 dark:text-neutral-200"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
                        <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
                    </svg>
                    <div class="grow">
                        <h3 class="font-semibold text-gray-800 dark:text-neutral-200">Contacto por correo electrónico</h3>
                        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">Si desea escribirnos un
                            correo electrónico en su lugar, por favor utilice</p>
                        <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
                            href="mailto:contacto@itnexvel.com">
                            contacto@itnexvel.com
                        </a>
                    </div>
                </div>
                <!-- End Icon Block -->
            </div>
        </div>
    </div>
    <!-- End Contact Us -->
</x-layouts.guest>
