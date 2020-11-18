{{--
Template Name: Commercial Product
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
<div class="page-header py-8 lg:py-16">
  <div class="text-center">
    <h1 class="font-bold uppercase text-xl tracking-widest">
      <a class="hover:underline" href="{!! get_the_permalink(488) !!}">{!! get_the_title(488) !!}</a>
    </h1>
  </div>
</div>
@include('partials.comm-app-content')
@endwhile
@endsection
