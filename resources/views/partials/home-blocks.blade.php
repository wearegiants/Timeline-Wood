@php $items = get_field('features') @endphp

<div class="container grid grid-cols-1 md:grid-cols-2 gap-5 py-5 md:gap-8 md:py-8 lg:gap-12 lg:py-12">
  @foreach($items as $item)
    <a href="{{ $item['link']['url'] }}" class="relative block group">
      <div class="relative bg-gray-200">
        <div class="absolute inset-0 bg-black overflow-hidden">
          <img 
            src="{!! $item['image']['sizes']['large'] !!}" 
            class="object-cover w-full h-full transform transition ease duration-700 group-hover:scale-105">
          <!-- @include('components.image',[
            'image' => $item['image']['sizes']['large'],
            'size'  => 'large',
            'class' => 'object-cover w-full h-full',
          ]) -->
        </div>
        <div class="aspect-ratio-square"></div>
      </div>
      <div class="py-4 text-center prose prose-lg max-w-full lg:px-20">
        <div>{!! $item['title'] !!}</div>
        <span class="text-xs font-medium tracking-widest uppercase">{!! $item['link']['title'] !!}</span>
      </div>
    </a>
  @endforeach
</div>