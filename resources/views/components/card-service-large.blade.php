@props([
    'title' => '',
    'description' => '',
    'icon' => null,
])

<div data-aos="fade-up" {{ $attributes->merge(['class' => 'focus:outline-hidden rounded-lg p-5 group scrollanimation animated fadeInUp']) }}>    
    <div class="flex items-center gap-x-4 {{ $attributes->has('right') ? 'justify-end' : 'justify-start' }}">
        @if ($icon)
            <div class="relative w-fit">
                <span class="absolute w-12 inset-0 bg-secondary-400/40 rounded-l-xl rounded-r-lg z-0 -top-2 -right-2"></span>
                <span class="absolute w-12 inset-0 bg-secondary-400/50 rounded-xl z-0 top-2 left-2"></span>
                <div class="z-10 relative group-hover:scale-120 group-hover:translate-x-0 group-hover:translate-y-0 transition ease-in-out">
                    {{ $icon }}
                </div>
            </div>
        @endif
        <h3 class="text-2xl font-semibold text-primary-600 {{  $attributes->has('right') ? 'order-2' : 'order-1' }}" >{{ $title }} </h3>
    </div>

    <div
        @class([
            'bg-linear-to-r from-gray-200 via-gray-50 to-transparent h-0.5 mt-6' => !$attributes->has('right'),
            'bg-linear-to-l from-gray-200 via-gray-50 to-transparent h-0.5 mt-6 flex items-center justify-end' => $attributes->has('right')
        ])>
        <div class="bg-secondary-400 w-9 h-0.5"></div>
    </div>

    <div class="mt-5">
        <p class="mt-1 text-gray-600 {{  $attributes->has('right') ? 'text-' : 'order-2' }}">{{ $description }}</p>
    </div>
</div>