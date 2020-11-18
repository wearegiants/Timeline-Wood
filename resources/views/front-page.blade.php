@extends('layouts.app')
@section('content')

<div class="bg-gray-200 relative">
  <div class="absolute inset-0 flex items-center justify-center">
    <div class="container text-center">
      <div class="text-4xl md:text-6xl md:leading-tight">DIY, NBD: Meet Skinnies™</div>
      <div class="mb-4 md:mb-8">Timeline Skinnies™ are easy-to-install real wood panels that are proudly made in the USA</div>
      <a class="bg-white inline-flex items-center h-12 px-4 space-x-2 font-bold uppercase tracking-wide text-sm border-2 border-black hover:bg-black hover:text-white" href="">
        <span>Shop Now</span>
        <i height="16" width="16" data-feather="arrow-right"></i>
      </a>
    </div>
  </div>
  <div class="aspect-ratio-square sm:aspect-ratio-4/3 lg:aspect-ratio-16/9"></div>
</div>

@endsection
