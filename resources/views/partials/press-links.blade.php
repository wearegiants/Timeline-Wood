@php $images = get_field('gallery') @endphp

<div class="container">
  <div class="grid grid-cols-2 md:grid-cols-4 gap-5 py-5 md:gap-8 md:py-8">
    @foreach ($images as $image)
      <a href="{{ $image['description'] }}" target="_blank" class="group">
        <div class="relative border border-transparent group-hover:border-gray-100">
          <div class="absolute inset-0 p-4 flex items-center justify-center">
            <img src="{{ $image['url'] }}" alt="" class="object-contain object-center max-w-full max-h-full">
          </div>
          <div class="aspect-ratio-square sm:aspect-ratio-4/3"></div>
        </div>
        <div class="text-center uppercase tracking-widest font-bold text-brand-red opacity-0 group-hover:opacity-100 transition ease duration-300">
          <span class="text-xs" href="{{ $image['description'] }}">Read More</span>
        </div>
      </a>
    @endforeach
  </div>
</div>