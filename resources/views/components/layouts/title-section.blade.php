@props([
    'title',
    'description' => null,
])

<div class="text-center scrollanimation animated fadeInUp" data-aos="fade-up">
    <h2 class="text-3xl lg:text-5xl text-gray-800 font-bold">
      {{ $title }}
    </h2>
    @if ($description)
        <p class="mt-3 text-gray-600">
            {{ $description }}
        </p>
    @endif
</div>