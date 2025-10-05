@props(['socialNetworks'])

<div {{ $attributes->merge(['class' => 'gap-2']) }}>
    @forelse($socialNetworks as $network)
        <a
            class="transition-transform hover:scale-105 flex flex-col justify-center items-center"
            href="{{ $network->url }}"
            target="_blank"
            rel="noopener noreferrer"
            @if($network->color) style="--hover-color: {{ $network->color }};" @endif
            title="{{ $network->alt_text }}"
        >
            @if($network->icon_type === 'svg')
                <div class="network-icon | shrink-0 flex items-center justify-center" style="color: {{ $network->color }};">
                    {!! $network->icon_svg !!}
                </div>
            @else
                <img
                    src="{{ asset('storage/' . $network->icon) }}"
                    alt="{{ $network->alt_text }}"
                    class="shrink-0 h-12 w-12"
                    loading="lazy"
                />
            @endif

            @if ($network->name)
                <span class="mt-1">{{ $network->name }}</span>
            @endif
        </a>
    @empty
        <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-500 hover:bg-secondary-100 focus:outline-hidden focus:bg-secondary-100 disabled:opacity-50 disabled:pointer-events-none _dark:text-neutral-400 _dark:hover:bg-neutral-700 _dark:focus:bg-neutral-700" href="#">
            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
            </svg>
        </a>
    @endforelse
</div>
