<footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <!-- Grid -->
    <div class="grid grid-cols-3 md:grid-cols-3 items-center gap-5">
        <div>
            <a class="flex-none text-xl font-semibold text-black focus:outline-hidden _dark:text-white"
                href="{{ route('home') }}" aria-label="{{ config('app.name') }}">
                <span class="sr-only">{{ config('app.name') }}</span>
                <x-app-logo-svg class="h-3 w-auto px-2 fill-[#42575f] text-[#42575f]" />
            </a>
        </div>
        <!-- End Col -->

        <ul class="text-center col-span-2 md:col-span-1">
            <li
                class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 _dark:before:text-neutral-600">
                <a class="inline-flex gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 _dark:text-neutral-500 _dark:hover:text-neutral-200 _dark:focus:text-neutral-200"
                    href="{{ route('services') }}">
                    Servicios
                </a>
            </li>
            <li
                class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 _dark:before:text-neutral-600">
                <a class="inline-flex gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 _dark:text-neutral-500 _dark:hover:text-neutral-200 _dark:focus:text-neutral-200"
                    href="{{ route('contact') }}">
                    Contacto
                </a>
            </li>
            <li
                class="inline-block relative pe-8 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-3 before:-translate-y-1/2 before:content-['/'] before:text-gray-300 _dark:before:text-neutral-600">
                <a class="inline-flex gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-hidden focus:text-gray-800 _dark:text-neutral-500 _dark:hover:text-neutral-200 _dark:focus:text-neutral-200"
                    href="{{ route('about') }}">
                    Nosotros
                </a>
            </li>
        </ul>
        <!-- End Col -->

        <!-- Social Brands -->
        <x-layouts.social-brands class="col-span-full md:col-span-1 text-center" />
        <!-- End Social Brands -->
    </div>
    <!-- End Grid -->
    
</footer>
