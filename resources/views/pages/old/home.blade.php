<x-layouts.guest :title="__('Home')">
    <div class="relative overflow-hidden">
        {{-- <div
            class="absolute inset-2 bottom-0 _rounded-4xl ring-1 ring-black/5 ring-inset bg-linear-115 from-[#fff1be] from-28% via-[#ee87cb] via-70% to-[#b060ff] sm:bg-linear-145">
        </div> --}}
        <div class="relative px-6 lg:px-8 | bg-linear-115 from-[#6d8a96] from-28% via-[#627c86] via-70% to-[#42575F]">
            <div class="mx-auto max-w-2xl lg:max-w-7xl">
                <header class="pt-5 sm:pt-8" data-headlessui-state="">
                    <div class="">
                        <div
                            class="relative flex justify-between group/row relative isolate pt-[calc(--spacing(2)+1px)] last:pb-[calc(--spacing(2)+1px)]">
                            <div aria-hidden="true" class="absolute inset-y-0 left-1/2 -z-10 w-screen -translate-x-1/2">
                                <div class="absolute inset-x-0 top-0 border-t border-black/5"></div>
                                <div class="absolute inset-x-0 top-2 border-t border-black/5"></div>
                                <div
                                    class="absolute inset-x-0 bottom-0 hidden border-b border-black/5 group-last/row:block">
                                </div>
                                <div
                                    class="absolute inset-x-0 bottom-2 hidden border-b border-black/5 group-last/row:block">
                                </div>
                            </div>
                            <div class="relative flex gap-6">
                                <div class="py-3 group/item relative">
                                    <svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-first/item:block absolute size-[15px] fill-black/10 -top-2 -left-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="absolute size-[15px] fill-black/10 -top-2 -right-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-first/item:group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -left-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -right-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg>

                                    <a title="Home" data-headlessui-state="" href="/">
                                        <x-app-logo-svg class="w-[200px] px-2 fill-[#FFF] text-[#FFF]" />
                                    </a>
                                </div>
                            </div>
                            <nav class="relative hidden lg:flex">
                                <div class="relative flex group/item relative"><svg viewBox="0 0 15 15"
                                        aria-hidden="true"
                                        class="hidden group-first/item:block absolute size-[15px] fill-black/10 -top-2 -left-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="absolute size-[15px] fill-black/10 -top-2 -right-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-first/item:group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -left-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -right-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><a
                                        class="flex items-center px-4 py-3 text-base font-medium text-white _text-gray-950 bg-blend-multiply data-hover:bg-black/2.5"
                                        data-headlessui-state="" href="/nosotros">Nosotros</a></div>
                                <div class="relative flex group/item relative"><svg viewBox="0 0 15 15"
                                        aria-hidden="true"
                                        class="hidden group-first/item:block absolute size-[15px] fill-black/10 -top-2 -left-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="absolute size-[15px] fill-black/10 -top-2 -right-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-first/item:group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -left-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -right-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><a
                                        class="flex items-center px-4 py-3 text-base font-medium text-white _text-gray-950 bg-blend-multiply data-hover:bg-black/2.5"
                                        data-headlessui-state="" href="/soluciones-y-servicios">Soluciones y
                                        servicios</a></div>
                                <div class="relative flex group/item relative"><svg viewBox="0 0 15 15"
                                        aria-hidden="true"
                                        class="hidden group-first/item:block absolute size-[15px] fill-black/10 -top-2 -left-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="absolute size-[15px] fill-black/10 -top-2 -right-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-first/item:group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -left-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -right-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><a
                                        class="flex items-center px-4 py-3 text-base font-medium text-white _text-gray-950 bg-blend-multiply data-hover:bg-black/2.5"
                                        data-headlessui-state="" href="/instalaciones">Instalaciones</a></div>
                                <div class="relative flex group/item relative"><svg viewBox="0 0 15 15"
                                        aria-hidden="true"
                                        class="hidden group-first/item:block absolute size-[15px] fill-black/10 -top-2 -left-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="absolute size-[15px] fill-black/10 -top-2 -right-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-first/item:group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -left-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                        class="hidden group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -right-2">
                                        <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                    </svg><a
                                        class="flex items-center px-4 py-3 text-base font-medium text-white _text-gray-950 bg-blend-multiply data-hover:bg-black/2.5"
                                        data-headlessui-state="" href="/contacto">Contacto</a></div>
                            </nav>
                            <button
                                class="flex size-12 items-center justify-center self-center rounded-lg data-hover:bg-black/5 lg:hidden"
                                aria-label="Open main menu" id="headlessui-disclosure-button-:Rsm6fkq:" type="button"
                                aria-expanded="false" data-headlessui-state=""><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" data-slot="icon" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M3 9a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9Zm0 6.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                        clip-rule="evenodd"></path>
                                </svg></button>
                        </div>
                    </div>
                </header>

                <div class="pt-16 pb-24 sm:pt-24 sm:pb-32 md:pt-32 md:pb-48">
                    <h1
                        class="font-display text-6xl/[0.9] font-medium tracking-tight text-balance text-white sm:text-8xl/[0.8] md:text-7xl/[0.8]">
                        Servicios de Staffing
                    </h1>
                    <p class="mt-8 max-w-lg text-xl font-medium text-white/75 sm:text-3xl">
                        Talento como Servicio
                    </p>
                    <div class="mt-8 flex flex-col gap-x-6 gap-y-4 sm:flex-row">
                        <a class="inline-flex items-center justify-center px-4 py-[calc(--spacing(2)-1px)] border border-transparent bg-[#333] shadow-md text-base font-medium whitespace-nowrap text-white data-disabled:bg-gray-950 data-disabled:opacity-40 data-hover:bg-gray-800"
                            data-headlessui-state="" href="/contacto">
                            Contacto
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="isolate">
        <!-- Hero section -->
        <div class="relative isolate -z-10">
            {{-- <svg class="absolute inset-x-0 top-0 -z-10 h-256 w-full mask-[radial-gradient(32rem_32rem_at_center,white,transparent)] stroke-gray-200" aria-hidden="true">
            <defs>
                <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1" patternUnits="userSpaceOnUse">
                <path d="M.5 200V.5H200" fill="none"></path>
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z" stroke-width="0"></path>
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)"></rect>
            </svg> --}}
            <div class="absolute top-0 right-0 left-1/2 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48" aria-hidden="true">
            <div class="aspect-801/1036 w-200.25 bg-linear-to-tr from-[#6d8a96] to-[#42575F] opacity-30" style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)"></div>
            </div>
            <div class="overflow-hidden">
            <div class="mx-auto max-w-7xl px-6 pt-36 pb-32 sm:pt-60 lg:px-8 lg:pt-32">
                <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                <div class="relative w-full lg:max-w-xl lg:shrink-0 xl:max-w-2xl">
                    <div class="relative">
                        
                        <div aria-hidden="true" class="absolute inset-y-0 left-1/2 -z-10 w-screen -translate-x-1/2">
                            <div class="absolute inset-x-0 top-0 border-t border-black/5"></div>
                            <div class="absolute inset-x-0 top-2 border-t border-black/5"></div>
                            <div
                                class="absolute inset-x-0 bottom-0 hidden border-b border-black/5 group-last/row:block">
                            </div>
                            <div
                                class="absolute inset-x-0 bottom-2 hidden border-b border-black/5 group-last/row:block">
                            </div>
                        </div>
                        <div class="relative flex gap-6">
                            <div class="py-3 group/item relative">
                                <svg viewBox="0 0 15 15" aria-hidden="true"
                                    class="hidden group-first/item:block absolute size-[15px] fill-black/10 -top-2 -left-2">
                                    <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                    class="absolute size-[15px] fill-black/10 -top-2 -right-2">
                                    <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                    class="hidden group-first/item:group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -left-2">
                                    <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                    class="hidden group-last/row:block absolute size-[15px] fill-black/10 -bottom-2 -right-2">
                                    <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                </svg>
                                <h1 class="text-5xl font-semibold tracking-tight text-pretty text-[#4C636B] sm:text-5xl">Somos Interside Holding: todas las soluciones en un solo lugar</h1>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 text-lg font-medium text-pretty text-[#4C636B] sm:max-w-md sm:text-xl/8 lg:max-w-none">
                    Nuestro holding de tres empresas contempla las áreas de Ingeniería y Servicios especializados en soluciones TIC, Energía, DataCenter, Desarrollo de Software a medida y Mensajería Masiva. Todo en un solo lugar para ofrecer soluciones a la medida de tu empresa. 
                    </p>
                    <p class="mt-4 text-lg font-medium text-pretty text-[#4C636B] sm:max-w-md sm:text-xl/8 lg:max-w-none">
                    Llegamos a lugares donde otros no llegan gracias a que contamos con un experimentado grupo humano capaz de proveer soluciones de todo tipo a tu empresa. Mientras trabajamos día y noche por ayudarte a crecer con seguridad. 
                    </p>    
                <p class="mt-4 text-lg font-medium text-pretty text-[#4C636B] sm:max-w-md sm:text-xl/8 lg:max-w-none">
                    Nuestra elevada calidad de servicio te proporciona considerables beneficios en cuanto a productividad, motivación, capacitación, lealtad y compromiso; integrando las mejores soluciones del mercado en base a tus requerimientos, para agregar valor a los procesos de su empresa.
                </p>
                </div>
                <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                    <div class="ml-auto w-full flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-0">
                        <div class="relative">
                            <img src="https://www.interside.cl/wp-content/uploads/2020/02/ilya-pavlov-OqtafYT5kTw-unsplash-1024x683.jpg" alt="" class="aspect-2/2 w-full rounded bg-gray-900/5 object-cover shadow-lg">
                            <div class="pointer-events-none absolute inset-0 rounded ring-1 ring-gray-900/10 ring-inset"></div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </main>

    <div class="relative bg-[#4C636B] overflow-hidden">
        <div class="relative h-80 overflow-hidden bg-[#333] md:absolute md:left-0 md:h-full md:w-1/3 lg:w-1/2 z-[10]">
          {{-- <img class="size-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&blend=6366F1&sat=-100&blend-mode=multiply" alt="" /> --}}
          <svg viewBox="0 0 926 676" aria-hidden="true" class="absolute -bottom-24 left-24 w-[57.875rem] transform-gpu blur-[118px]">
            <path fill="url(#60c3c621-93e0-4a09-a0e6-4c228a0116d8)" fill-opacity=".4" d="m254.325 516.708-90.89 158.331L0 436.427l254.325 80.281 163.691-285.15c1.048 131.759 36.144 345.144 168.149 144.613C751.171 125.508 707.17-93.823 826.603 41.15c95.546 107.978 104.766 294.048 97.432 373.585L685.481 297.694l16.974 360.474-448.13-141.46Z" />
            <defs>
              <linearGradient id="60c3c621-93e0-4a09-a0e6-4c228a0116d8" x1="926.392" x2="-109.635" y1=".176" y2="321.024" gradientUnits="userSpaceOnUse">
                <stop stop-color="#637D87" />
                <stop offset="1" stop-color="#637D87" />
              </linearGradient>
            </defs>
          </svg>
        </div>
        <div class="relative mx-auto max-w-7xl py-24 sm:py-32 lg:px-8 lg:py-40">
          <div class="pl-6 pr-6 md:ml-auto md:w-2/3 md:pl-16 lg:w-1/2 lg:pl-24 lg:pr-0 xl:pl-32">
            <div class="relative">
                <div aria-hidden="true" class="absolute inset-y-0 left-1/2 z-1 w-screen -translate-x-1/2">
                    <div class="absolute inset-x-0 top-0 border-t border-white/20"></div>
                    <div class="absolute inset-x-0 top-2 border-t border-white/20"></div>
                    <div
                        class="absolute inset-x-0 bottom-0 border-b border-white/20 group-last/row:block">
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-2 border-b border-white/20 group-last/row:block">
                    </div>
                </div>
                <div class="relative flex gap-6">
                    <div class="py-3 group/item relative">
                        <svg viewBox="0 0 15 15" aria-hidden="true"
                            class="hidden group-first/item:block absolute size-[15px] fill-white/20 -top-2 -left-2">
                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                        </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                            class="absolute size-[15px] fill-white/20 -top-2 -right-2">
                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                        </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                            class="group-first/item:group-last/row:block absolute size-[15px] fill-white/20 -bottom-2 -left-2">
                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                        </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                            class="group-last/row:block absolute size-[15px] fill-white/20 -bottom-2 -right-2">
                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                        </svg>
                        <h2 class="text-4xl font-semibold text-white">Somos Interside Instalaciones</h2>
                    </div>
                </div>
                
            </div>
            <p class="mt-6 text-base/7 text-gray-300">El Holding también cuenta con un área de Telecomunicaciones, Energía, Datacenter y Cableado, desarrollando de manera integral procesos de ingeniería de primer nivel en estas líneas de negocios, aplicando las políticas de calidad y experiencia de nuestro Holding a tus necesidades en esta área.</p>
            <p class="mt-6 text-base/7 text-gray-300">Ponemos a nuestra disposición no solo a nuestro amplio y experimentado equipo de trabajo. También la seguridad de nuestros centros de datos seguros y eficientes; dado que entendemos de conectividad y ayudamos a su desarrollo tecnológico generando vínculos de confianza.</p>
            <div class="mt-8">
              <a href="#" class="inline-flex rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-[#4C636B]  shadow-sm hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">¡Contactanos!</a>
            </div>
          </div>
        </div>
      </div>

      
      <div class="relative bg-[#637D87] overflow-hidden">
        <div class="relative h-80 overflow-hidden bg-[#333] md:absolute md:right-0 md:h-full md:w-1/3 lg:w-1/2 z-1">
          {{-- <img class="size-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&blend=6366F1&sat=-100&blend-mode=multiply" alt="" /> --}}
          <svg viewBox="0 0 926 676" aria-hidden="true" class="absolute -bottom-24 right-24 w-[57.875rem] transform-gpu blur-[118px]">
            <path fill="url(#60c3c621-93e0-4a09-a0e6-4c228a0116d8)" fill-opacity=".4" d="m254.325 516.708-90.89 158.331L0 436.427l254.325 80.281 163.691-285.15c1.048 131.759 36.144 345.144 168.149 144.613C751.171 125.508 707.17-93.823 826.603 41.15c95.546 107.978 104.766 294.048 97.432 373.585L685.481 297.694l16.974 360.474-448.13-141.46Z" />
            <defs>
              <linearGradient id="60c3c621-93e0-4a09-a0e6-4c228a0116d8" x1="926.392" x2="-109.635" y1=".176" y2="321.024" gradientUnits="userSpaceOnUse">
                <stop stop-color="#637D87" />
                <stop offset="1" stop-color="#637D87" />
              </linearGradient>
            </defs>
          </svg>
        </div>
        <div class="relative mx-auto max-w-7xl py-24 sm:py-32 lg:px-8 lg:py-40">
          <div class="pl-6 pr-6 md:mr-auto md:w-2/3 md:pr-16 lg:w-1/2 lg:pr-24 lg:pl-0 xl:pr-32">
            <div class="relative">
                <div aria-hidden="true" class="absolute inset-y-0 left-1/2 w-screen -translate-x-1/2">
                    <div class="absolute inset-x-0 top-0 border-t border-white/20"></div>
                    <div class="absolute inset-x-0 top-2 border-t border-white/20"></div>
                    <div class="absolute inset-x-0 bottom-0 border-b border-white/20 group-last/row:block">
                    </div>
                    <div class="absolute inset-x-0 bottom-2 border-b border-white/20 group-last/row:block">
                    </div>
                </div>

                <div class="relative flex gap-6">
                    <div class="py-3 group/item relative">
                        <svg viewBox="0 0 15 15" aria-hidden="true"
                            class="hidden group-first/item:block absolute size-[15px] fill-white/20 -top-2 -left-2">
                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                        </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                            class="absolute size-[15px] fill-white/20 -top-2 -right-2">
                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                        </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                            class="group-first/item:group-last/row:block absolute size-[15px] fill-white/20 -bottom-2 -left-2">
                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                        </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                            class="group-last/row:block absolute size-[15px] fill-white/20 -bottom-2 -right-2">
                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                        </svg>
                        <h2 class="text-4xl font-semibold text-white">Somos Interside Soluciones y Servicios</h2>
                    </div>
                </div>
            </div>
            <p class="mt-6 text-base/7 text-white">Nuestro Holding cuenta con un área de Soluciones y Servicios que ofrece Soluciones de Seguridad; Comunicaciones Unificadas; Soluciones de Redes e Infraestructura; Monitoreo y Administración 7×24 y Capacitaciones y Asesoría.</p>
            <p class="mt-6 text-base/7 text-white">Contamos además con un potente grupo de ingenieros y técnicos especializados en las distintas tecnologías que ofrecemos en este sector.</p>
            <p class="mt-6 text-base/7 text-white">Brindamos servicios y proyectos a nivel multimarca. La experiencia de todo nuestro grupo hace que esta área de Soluciones y Servicio sea la mejor opción para proyectos de mediana y gran envergadura para tu empresa.</p>
            <div class="mt-8">
              <a href="#" class="inline-flex rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-[#4C636B] shadow-sm hover:bg-white/20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">¡Conócenos!</a>
            </div>
          </div>
        </div>
      </div>
      
        <div class="overflow-hidden">
            <div class="relative isolate bg-neutral-50 py-16 sm:py-28 md:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:max-w-none">
                        <div style="opacity: 1; transform: none;">
                            <figure class="mx-auto max-w-4xl relative">
                                <div aria-hidden="true" class="absolute inset-y-0 left-1/2 w-screen -translate-x-1/2">
                                    <div class="absolute inset-x-0 top-0 border-t border-black/20"></div>
                                    <div class="absolute inset-x-0 top-2 border-t border-black/20"></div>
                                    <div class="absolute inset-x-0 bottom-0 border-b border-black/20 group-last/row:block">
                                    </div>
                                    <div class="absolute inset-x-0 bottom-2 border-b border-black/20 group-last/row:block">
                                    </div>
                                </div>
                
                                <div class="relative flex gap-6">
                                    <div class="py-3 group/item relative">
                                        <svg viewBox="0 0 15 15" aria-hidden="true"
                                            class="hidden group-first/item:block absolute size-[15px] fill-black/20 -top-2 -left-2">
                                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                        </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                            class="absolute size-[15px] fill-black/20 -top-2 -right-2">
                                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                        </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                            class="group-first/item:group-last/row:block absolute size-[15px] fill-black/20 -bottom-2 -left-2">
                                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                        </svg><svg viewBox="0 0 15 15" aria-hidden="true"
                                            class="group-last/row:block absolute size-[15px] fill-black/20 -bottom-2 -right-2">
                                            <path d="M8 0H7V7H0V8H7V15H8V8H15V7H8V0Z"></path>
                                        </svg>
                                        <div class="relative font-display text-3xl font-medium tracking-tight text-[#3A3E40] sm:text-4xl">

                                            <p
                                            class="before:content-['“'] after:content-['”'] sm:before:absolute sm:before:right-full">
                                            El principal activo con el cual cuenta Interside Holding es el potente equipo de trabajo con el que desarrollamos soluciones de alta gama a un extenso grupo de clientes con los que hemos trabajado por años.</p>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-[#314750]">
            <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
                <nav class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6" aria-label="Footer">
                    <a href="#" class="text-gray-100 hover:text-white">Nuestros Servicios</a>
                    <a href="#" class="text-gray-100 hover:text-white">Nosotros</a>
                    <a href="#" class="text-gray-100 hover:text-white">Contacto</a>
                    <a href="#" class="text-gray-100 hover:text-white">Política de Privacidad</a>
                    <a href="#" class="text-gray-100 hover:text-white">Terminos y Condiciones</a>
                </nav>
                <div class="mt-16 flex justify-center gap-x-10">
                    <a href="#" class="text-gray-100 hover:text-white">
                        <span class="sr-only">Facebook</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-100 hover:text-white">
                        <span class="sr-only">Instagram</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-100 hover:text-white">
                        <span class="sr-only">X</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-100 hover:text-white">
                        <span class="sr-only">GitHub</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-100 hover:text-white">
                        <span class="sr-only">YouTube</span>
                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <p class="mt-10 text-center text-sm/6 text-gray-100">&copy; 2025 IT Nexvel, Inc. All rights
                    reserved.</p>
            </div>
        </footer>
</x-layouts.guest>
