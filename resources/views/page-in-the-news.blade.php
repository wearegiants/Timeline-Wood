@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.press-links')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
