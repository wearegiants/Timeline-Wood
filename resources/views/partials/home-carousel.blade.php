@php
  $color = get_field('feature_headline_color');
  if ($color == 'color--white') {
    $textColor = 'text-white';
  } elseif($color == 'color--black') {
    $textColor = 'text-black';
  } elseif($color == 'color--gray') {
    $textColor = 'text-gray-500';
  } else {
    $textColor = 'text-black';
  }
@endphp

<div class="bg-black relative -mt-px">
  <div class="absolute inset-0 flex items-center justify-center z-10">
    <div class="container text-center">
      <div class="{{ $textColor }}">
        <div class="text-4xl md:text-6xl">{{ the_field('feature_headline') }}</div>
        <div class="mb-4 md:mb-8 text-2xl">{{ the_field('feature_subheadline') }}</div>
      </div>
      <a
        href="{{ the_field('feature_link_url',4) }}" 
        class="border-b text-white tracking-wider">
        <span>{{ the_field('feature_link_title',4) }}</span>
      </a>
    </div>
  </div>
  <div class="absolute inset-0 z-0">
    <img src="{{ get_field('feature_image', 4)['sizes']['large'] }}" class="w-full h-full object-cover">
  </div>
  <div class="aspect-ratio-square sm:aspect-ratio-4/3 lg:aspect-ratio-16/9 xl:aspect-ratio-21/9"></div>
</div>