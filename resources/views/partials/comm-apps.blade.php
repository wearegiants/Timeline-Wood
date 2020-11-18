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

<div class="container grid grid-cols-2 lg:grid-cols-3 gap-5 md:gap-8 lg:gap-12">
  @php while ( $parent->have_posts() ) : $parent->the_post(); @endphp
    <a href="@php the_permalink(); @endphp" title="@php the_title(); @endphp" id="parent-@php the_ID(); @endphp" class="parent-page group block">
      <div class="relative mb-3 overflow-hidden">
        @include('components.image',[
          'image' => get_post_thumbnail_id(),
          'size'  => 'large',
          'class' => 'object-cover w-full h-full absolute inset-0 transform transition ease duration-700 scale-105 group-hover:scale-100',
        ])
        <div class="aspect-ratio-square"></div>
      </div>
      <h1 class="text-center">@php the_title(); @endphp</h1>
    </a>
  @php endwhile; @endphp
</div>

@php endif; wp_reset_postdata(); @endphp