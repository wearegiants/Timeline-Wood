@extends('layouts.app')
@section('content')

<div class="container relative">
  <div class="absolute inset-0 flex items-center justify-center">
    <div class="text-center">
      <x-alert type="warning">
        <div class="text-4xl md:text-6xl md:leading-tight">Not Found</div>
        {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
      </x-alert>
    </div>
  </div>
  <div class="aspect-ratio-square sm:aspect-ratio-4/3 lg:aspect-ratio-16/9"></div>
</div>

@endsection
