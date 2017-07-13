<?php 
	Themewrangler::setup_page();get_header(/***Template Name: Commercial Applications */);
?>

<?php 
  $home_args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
  );
  $home_posts = get_posts( $home_args );
?>

<div id="collection">
  <?php include locate_template('parts/page-header.php' ); ?>
  <div class="fs-row">
    <?php 
      $counter = 0; 
      foreach ( $home_posts as $post ) : setup_postdata( $post ); 
      $thumb_id = get_post_thumbnail_id();
      $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'commercial', true);
      $thumb_url = $thumb_url_array[0];
      $images = get_field('gallery');
    ?>
    <div class="fs-cell fs-lg-third fs-md-half fs-sm-full">
      <div class="product-item relative">
        <div class="relative">
          <?php if ($images): ?>
          <a class="product-item__link covered" data-lightbox-gallery="gallery-<?php echo $counter;  ?>" href="<?php the_permalink(); ?>"></a>
          <?php /*<a class="product-item__link covered lightbox" data-lightbox-gallery="gallery-<?php echo $counter;  ?>" href="<?php echo $thumb_url; ?>"></a> */ ?>
          <?php endif; ?>
          <div class="product-item__thumb">
            <img class="product-item__image product-item__image--first img-responsive" src="<?php echo $thumb_url ?>" alt="{{ product.featured_image.alt | escape }}">
          </div>
        </div>
        <header class="text-center product-item__header">
          <h2 class="product-item__title"><?php the_title(); ?></h2>
        </header>
      </div>
      <?php if ($images): ?>
      <?php foreach($images as $image): ?>
      <a href="<?php echo $image['url']; ?>" class="lightbox" data-lightbox-gallery="gallery-<?php echo $counter;  ?>"></a>
      <?php endforeach; ?>
      <?php endif; ?>
      <hr class="invisible compact fs-lg-hide fs-md-hide">
      <hr class="invisible">
    </div>
    <?php $counter++; endforeach; ?>
  </div>
</div>

<?php 
  wp_reset_postdata(); 
  get_footer();
?>


<?php get_footer(); ?>