<div class="bg-black relative -mt-px">
  <div class="absolute inset-0 flex items-center justify-center z-10">
    <div class="container text-center">
      <div class="text-white">
        <div class="text-4xl md:text-6xl md:leading-tight">{{ the_field('feature_headline') }}</div>
        <div class="mb-4 md:mb-8 text-lg">{{ the_field('feature_subheadline') }}</div>
      </div>
      <a
        href="{{ the_field('feature_link_url',4) }}" 
        class="bg-white inline-flex items-center h-12 px-4 space-x-2 font-bold uppercase tracking-wide text-sm border-2 border-black hover:bg-black hover:text-white">
        <span>{{ the_field('feature_link_title',4) }}</span>
        <i height="16" width="16" data-feather="arrow-right"></i>
      </a>
    </div>
  </div>
  <div class="absolute inset-0 z-0">
    <img src="{{ get_field('feature_image', 4)['sizes']['large'] }}" class="w-full h-full object-cover">
  </div>
  <div class="aspect-ratio-square sm:aspect-ratio-4/3 lg:aspect-ratio-16/9 xl:aspect-ratio-21/9"></div>
</div>