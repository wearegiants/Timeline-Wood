@php $items = get_field('features') @endphp

<div class="container grid grid-cols-1 md:grid-cols-6 gap-5 py-5 md:gap-8 md:py-8 lg:gap-12 lg:py-12">
  @php $i = 1; @endphp
  @foreach($items as $item)

  @php
    if($i == '1') {
      $span = 'col-span-3 lg:col-span-2';
    } 
    elseif($i == '2') {
      $span = 'col-span-3 lg:col-span-4';
    }
    else {
      $span = 'col-span-3 md:col-span-6';
    } 
  @endphp

    <a data-aos="fade-up" id="item-{!! $i !!}" href="{{ $item['link']['url'] }}" class="relative block group {!! $span !!} ease duration-500">
      <div class="relative bg-gray-200">
        @if($item['video'])
          <div class="videoEmbed h-block-sm md:h-block-md lg:h-block-lg bg-black">
            @include('components.video', [ 'video' => $item['video']])
          </div>
        @else
          <div class="absolute inset-0 bg-black overflow-hidden">
            <img 
              src="{!! $item['image']['sizes']['large'] !!}" 
              class="object-cover w-full h-full transform transition ease duration-700 group-hover:scale-105">
          </div>
          <div class="h-block-sm md:h-block-md lg:h-block-lg"></div>
        @endif
      </div>
      <div class="py-4 text-center prose lg:prose-lg xl:prose-xl max-w-full">
        <div class="">{!! $item['title'] !!}</div>
        <span class="text-sm border-b border-black text-black tracking-widest uppercase">{!! $item['link']['title'] !!}</span>
      </div>
    </a>
  @php $i++; @endphp
  @endforeach
</div>