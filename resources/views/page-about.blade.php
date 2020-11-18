@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile

  @php
    $home_args = array(
      'post_type'      => 'page',
      'posts_per_page' => -1,
      'post_parent'    => $post->ID,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
    );
    $home_posts = get_posts( $home_args );
  @endphp

  @foreach ( $home_posts as $post ) : setup_postdata( $post )
  <div class="container grid grid-cols-3 gap-8">
    <div class="col-span-1">Text</div>
    <div class="col-span-2">Image</div>
  </div>
  @endforeach

@endsection