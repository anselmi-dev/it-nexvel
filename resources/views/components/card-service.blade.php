@props([
    'title' => '',
    'description' => '',
    'href' => route('services'),
    'icon' => null,
])

    <a href="{{ $href }}" class="hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg p-5 group scrollanimation animated fadeInUp" data-aos="fade-up">
        @if ($icon)
            <div class="relative w-fit">
                <span class="absolute w-12 inset-0 bg-secondary-400/40 rounded-l-xl rounded-r-lg z-0 -top-2 -right-2"></span>
                <span class="absolute w-12 inset-0 bg-secondary-400/50 rounded-xl z-0 top-2 left-2"></span>
                <div class="z-10 relative group-hover:scale-120 group-hover:translate-x-0 group-hover:translate-y-0 transition ease-in-out">
                    {{ $icon }}
                </div>
            </div>
        @endif
        <div
            class="bg-linear-to-r from-gray-200 via-gray-50 to-transparent h-0.5 mt-6">
            <div class="bg-secondary-400 w-9 h-0.5"></div>
        </div>
        <div class="mt-5">
            <h3 class="text-lg font-semibold text-primary-600">{{ $title }} </h3>
            <p class="mt-1 text-gray-600">{{ $description }}</p>
        </div>
    
        <div class="group flex gap-y-6 size-full hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg p-5 justify-end" >
            <p class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold text-primary-600">
                Ver más
                <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </p>
        </div>
    </a>