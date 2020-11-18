<div class="container">
  <span class="">{{ $title }}</span>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-5 py-5 md:gap-8 md:py-8">
    @foreach($location as $image)
      @include('components.retailer')
    @endforeach
  </div>
</div>