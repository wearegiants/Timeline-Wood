@php
  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
  );
  $parent = new WP_Query( $args );
  if ( $parent->have_posts() ) : 
@endphp

<div class="">
  @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
    <div class="">
      <div class="container md:grid grid-cols-3 gap-8 border-b last:border-0 border-gray-100 pb-10 mb-10">
        <div class="col-span-2 lg:order-last bg-gray-100 mb-4 md:mb-0">
          <div class="relative">
            @php $images = get_field('gallery') @endphp
            @foreach($images as $image)
            <img src="{!! $image['sizes']['large'] !!}" class="object-contain w-full h-full" alt="">
            @endforeach
          </div>
        </div>
        <div class="col-span-1">
          <div class="space-y-3 text-center md:text-left">
            <span class="text-brand-red text-xs uppercase font-bold tracking-widest">{{ the_field('subhead') }}</span>
            <h1 class="text-3xl">{!! the_title() !!}</h1>
            <div class="prose">{!! the_content() !!}</div>
          </div>
        </div>
      </div>
    </div>
  @php endwhile; @endphp
</div>

@php endif; wp_reset_postdata(); @endphp