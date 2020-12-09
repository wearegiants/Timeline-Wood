@extends('layouts.app')

@section('content')

@while(have_posts()) @php(the_post())
@include('partials.page-header')
@endwhile

<div class="container">
  <div class="md:grid grid-cols-3 gap-12">
    <div class="col-span-1 text-center md:text-left">
      <div class="prose">{!! get_field('description') !!}</div>
    </div>
    <div class="col-span-2 relative">
      <div class="absolute inset-0">{!! get_field('map') !!}</div>
      <div class="aspect-ratio-square sm:aspect-ratio-4/3 md:aspect-ratio-16/9 bg-gray-100"></div>
    </div>
  </div>
</div>

<div class="h-px bg-gray-100 my-10"></div>

<div class="container">
  <div class="md:grid grid-cols-3 gap-12">
    <div class="col-span-1 prose mb-4 md:mb-0 text-center md:text-left">
      {!! get_field('join') !!}
    </div>
    <div class="col-span-2 space-y-2">
      @include('components.subscribe-contact')
    </div>
  </div>
</div>

@endsection
