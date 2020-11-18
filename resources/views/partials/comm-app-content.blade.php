<div x-data="{ modal: false, tab: window.location.hash ? window.location.hash.substring(1) : 'image-1' }">
  <div class="container md:grid grid-cols-3 gap-12">
    <div class="col-span-2">
      <div class="relative grid grid-cols-6 gap-2 md:gap-4">
        @php $images = get_field('gallery') @endphp
        <div class="col-span-5 mb-8 md:mb-0">
          @php $counter = 1; @endphp
          @foreach($images as $image)
          <div class="relative" x-show="tab === 'image-{{ $counter }}'">
            <img src="{{ $image['sizes']['large'] }}" alt="{{ $image['alt'] }}" class="w-full h-full object-cover">
          </div>
          @php $counter++ @endphp
          @endforeach
        </div>
        <div class="col-span-1 space-y-2 md:space-y-4">
          @php $counter = 1; @endphp
          @foreach($images as $image)
          <button 
            @click.prevent="tab = 'image-{{ $counter }}'; window.location.hash = 'image-{{ $counter }}'" 
            :class="{ 'text-brand-red': tab === 'image-{{ $counter }}' }" 
            class="block w-full relative hover:text-brand-red group bg-black"
          >
            <img src="{{ $image['sizes']['medium'] }}" alt="{{ $image['alt'] }}" class="w-full h-full object-cover group-hover:opacity-75 transition ease duration-300">
          </button>
          @php $counter++ @endphp
          @endforeach
        </div>
      </div>
    </div>
    <div class="col-span-1">
      <div class="prose mb-6">
        <h1>@php the_title() @endphp</h1>
      </div>
      @include('partials.content-page')
      <div class="grid grid-cols-2 gap-2 mt-10">
        <button @click.prevent="modal = 'orders';"  class="border-2 border-black block h-12 px-6 font-bold text-xs tracking-widest uppercase hover:bg-black hover:text-white">Orders & Info</button>
        <button @click.prevent="modal = 'sample';"  class="border-2 border-black block h-12 px-6 font-bold text-xs tracking-widest uppercase hover:bg-black hover:text-white">Order Samples</button>
      </div>
    </div>
  </div>

  <div x-show="modal === 'sample'" class="fixed inset-0 bg-black bg-opacity-25 z-50 flex items-center justify-center p-2">
    <div class="max-w-2xl w-full bg-white p-8 md:p-12 relative">
      <button @click="modal = false;" class="absolute top-0 right-0 p-3 bg-black bg-opacity-05 rounded-full m-2"><i height="16" width="16" data-feather="x"></i></button>
      <header class="text-center mb-6"><h4 class="uppercase tracking-widest font-bold">Samples</h4></header>
      <div class="prose">
        @php the_field('samples', 488) @endphp
      </div>
    </div>
  </div>
  <div x-show="modal === 'orders'" class="fixed inset-0 bg-black bg-opacity-25 z-50 flex items-center justify-center p-2">
    <div class="max-w-2xl w-full bg-white p-8 md:p-12 relative">
      <button @click="modal = false;" class="absolute top-0 right-0 p-3 bg-black bg-opacity-05 rounded-full m-2"><i height="16" width="16" data-feather="x"></i></button>
      <header class="text-center mb-6"><h4 class="uppercase tracking-widest font-bold">Ordering</h4></header>
      <div class="prose">
        @php the_field('order', 488) @endphp
      </div>
    </div>
  </div>

</div>