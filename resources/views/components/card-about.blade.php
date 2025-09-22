<div class="flex gap-x-3 sm:gap-x-5 scrollanimation animated fadeInUp" data-aos="fade-up">
    <svg class="shrink-0 mt-0 size-8 text-gray-800 _dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
    </svg>
    <div class="grow">
        <h3 class="text-base sm:text-lg font-semibold text-gray-800 _dark:text-neutral-200">
            {{ $title }}
        </h3>
        @if (isset($description))
            <p class="mt-1 text-gray-600 _dark:text-neutral-400">
                {{ $description }}
            </p>
        @endif
    </div>
</div>
